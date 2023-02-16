<?php

class data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('data');
        $this->primary_key = 'id_data';
        $this->setPrimaryKey($this->primary_key);
    }

    function getAll() {
        return $this->db->order_by('last_update', 'DESC')->get('data')->result();
    }

    function findAll($where, $like = null) {
        if (!is_null($like))
            $this->db->like($like);
        return $this->db->order_by('last_update', 'DESC')->get_where('data', $where)->result();
    }

    function getRemainingMigrationCount() {
        $this->db->select('count(1) remaining');
        $this->db->where('migrated', 0);
        $result = $this->db->get('data')->row_array();
        return $result['remaining'];
    }

    function getRemainingMigration($limit) {
        $this->db->select('*');
        $this->db->where('migrated', 0);
        $this->db->limit($limit);
        return $this->db->get('data')->result_array();
    }

    function insert($data) {
        $insert['uid'] = $this->session->userdata('uid');
        $insert['name'] = $data['file_name'];
//        unset($data['file_name']);
        $created = new DateTime();
        $insert['created'] = $created->format('Y-m-d H:i:s');
        $insert['last_update'] = $created->format('Y-m-d H:i:s');
        $insert['data'] = json_encode($data);
        return parent::insert($insert);
    }

    function update($post) {
        $created = new DateTime();
        $insert['last_update'] = $created->format('Y-m-d H:i:s');
        $data[$this->primary_key] = $primary_key;
        $data['data'] = json_encode($post);
        return parent::update($data);
    }

    function load($primary_key) {
        $fulldata = parent::load($primary_key);
        return json_decode($fulldata['data'], true);
    }

    function findByPrimaryKey($primary_key) {
        return parent::load($primary_key);
    }

    function replicate($id, $new_name) {
        $replicate_id = time();
        $now = new DateTime();
        $cloned = $now->format('Y-m-d H:i:s');
        $this->db->query(
                "INSERT INTO `data` (`id_data`,`uid`,`name`,`data`,`last_update`)"
                . "(SELECT '$replicate_id', `uid`, '$new_name', `data`, '$cloned' FROM `data` WHERE `id_data` = $id)");
        $cloning = parent::load($replicate_id);
        $decoded = json_decode($cloning['data'], true);
        $decoded['file_name'] = $new_name;
        $cloning['data'] = json_encode($decoded);
        parent::update($cloning, $replicate_id);
    }

    function getExcelData() {
        $excel = array();
        # HEADER
        $excel['Users'][] = array(
            'System Gen No.',
            'User login',
            'Date pricing model created',
            'File name',
        );
        $excel['A1'][] = array(
            'Numbers',
            'Adviser 1',
            'Base Salary',
            'How many hours does this person work per week?',
            'What % of that time is spend doing specific client-related work?',
            'Adviser 2',
            'Base Salary',
            'How many hours does this person work per week?',
            'What % of that time is spend doing specific client-related work?',
            'Adviser 3',
            'Base Salary',
            'How many hours does this person work per week?',
            'Paraplanner 1',
            'Base Salary',
            'How many hours does this person work per week?',
            'What % of that time is spend doing specific client-related work?'
        );
        $excel['A2'][] = array(
            'Numbers',
            'Total Expenses from last year',
            'Do you foresee these changing greatly next year?',
            'By what % do you expect your expenses to grow or fall next year',
            'Total Employment Costs',
            'Total non-employment costs',
            'Target profit margin for the coming year?',
            'Target revenue for the coming year'
        );
        $excel['A3'][] = array(
            'Numbers',
            'Overheads',
            'Adviser - Employee charge',
            'Adviser-charge out rate',
            'Paraplanner - Employee charge',
            'Paraplanner-charge out rate',
            'Admin - Employee charge',
            'Admin-charge out rate'
        );
        # CONTENT
        $query = $this->db->query("SELECT `data`.*, `user`.`email` FROM `data` LEFT JOIN `user` ON `data`.`uid` = `user`.`uid`");
        foreach ($query->result() as $file) {
            $file->data = json_decode($file->data, true);

            $excel['Users'][] = array(
                $file->id_data,
                $file->email,
                $file->created,
                $file->data['file_name'],
            );

            $excel['A1'][] = array(
                $file->id_data,
                !isset($file->data['A5']) ? '' : $file->data['A5'],
                !isset($file->data['B5']) ? '' : $file->data['B5'],
                !isset($file->data['C5']) ? '' : $file->data['C5'],
                !isset($file->data['D5']) ? '' : $file->data['D5'],
                !isset($file->data['A6']) ? '' : $file->data['A6'],
                !isset($file->data['B6']) ? '' : $file->data['B6'],
                !isset($file->data['C6']) ? '' : $file->data['C6'],
                !isset($file->data['D6']) ? '' : $file->data['D6'],
                !isset($file->data['A7']) ? '' : $file->data['A7'],
                !isset($file->data['B7']) ? '' : $file->data['B7'],
                !isset($file->data['C7']) ? '' : $file->data['C7'],
                !isset($file->data['D7']) ? '' : $file->data['D7'],
                !isset($file->data['H5']) ? '' : $file->data['H5'],
                !isset($file->data['I5']) ? '' : $file->data['I5'],
                !isset($file->data['J5']) ? '' : $file->data['J5'],
                !isset($file->data['K5']) ? '' : $file->data['K5'],
            );

            $excel['A2'][] = array(
                $file->id_data,
                !isset($file->data['2B4']) ? '' : $file->data['2B4'],
                !isset($file->data['2B5']) ? '' : $file->data['2B5'],
                !isset($file->data['2B6']) ? '' : $file->data['2B6'],
                !isset($file->data['2B9']) ? '' : $file->data['2B9'],
                !isset($file->data['2B10']) ? '' : $file->data['2B10'],
                !isset($file->data['2B12']) ? '' : $file->data['2B12'],
                !isset($file->data['2B14']) ? '' : $file->data['2B14'],
            );

            $excel['A3'][] = array(
                $file->id_data,
                !isset($file->data['3C5']) ? '' : $file->data['3C5'],
                !isset($file->data['3B5']) ? '' : $file->data['3B5'],
                !isset($file->data['3D5']) ? '' : $file->data['3D5'],
                !isset($file->data['3B6']) ? '' : $file->data['3B6'],
                !isset($file->data['3D6']) ? '' : $file->data['3D6'],
                !isset($file->data['3B7']) ? '' : $file->data['3B7'],
                !isset($file->data['3D7']) ? '' : $file->data['3D7'],
            );
        }
        return $excel;
    }
}
