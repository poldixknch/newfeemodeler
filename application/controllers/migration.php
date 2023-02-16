<?php

class Migration extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('data');
        $this->load->model('user');
        $this->load->model('financial_target_data', 'financial_target');
        $this->load->model('one_many_service_data', 'one_many_service');
        $this->load->model('one_one_service_data', 'one_one_service');
        $this->load->model('standard_advice_data', 'standard_advice');
        $this->load->model('strategy_management_data', 'strategy_management');
        $this->load->model('strategy_variation_data', 'strategy_variation');
        $this->load->model('team_data', 'team');
        $this->load->model('transactional_advice_data', 'transactional_advice');
        $this->load->model('model_data');
        $this->load->model('other_data');
        $this->load->model('service_offering_data', 'service_offering');
    }
    function index() {
        $data['custom_js'] = ['controllers/MigrationController'];
        $this->load->template('migration/migration', $data);
    }

    function clearData() {
        $this->model_data->emptyTable();
        $this->data->updateWhere(['migrated' => 0], []);
        echo "model data empty";
    }

    function remaining() {
        $remaining = $this->data->getRemainingMigrationCount();
        die(json_encode(["remaining" => $remaining]));
    }

    function start($limit) {
        $datas = $this->data->getRemainingMigration($limit);
        $migrated = 0;
        foreach($datas as $data) {
            $excel_data = json_decode($data['data'], true);
            $id_data = $data['id_data'];
            $file_name = $data['name'];
            $date_created = $data['created'];
            $date_modified = $data['last_update'];
            $uid = $data['uid'];
            $user = $this->user->load($uid);
            $model_data = [
                "uid" => isset($user['uid']) ? $uid : '1420592737',
                "file_name" => $file_name,
                "date_created" => $date_created,
                "date_modified" => $date_modified
            ];
            $model_id = $this->model_data->insert($model_data);
            $this->migrate_team($model_id, $excel_data);
            $this->migrate_financial_target($model_id, $excel_data);
            $this->migrate_standard_advice($model_id, $excel_data);
            $this->migrate_transactional_advice($model_id, $excel_data);
            $this->migrate_strategy_variation($model_id, $excel_data);
            $this->migrate_one_one_service($model_id, $excel_data);
            $this->migrate_one_many_service($model_id, $excel_data);
            $this->migrate_strategy_management($model_id, $excel_data);
            $this->migrate_other_data($model_id, $excel_data);
            $this->data->updateWhere(['migrated' => 1], ['id_data' => $id_data]);
            $migrated++;
        }
        die(json_encode(['migrated' => $migrated]));
    }

    private function migrate_team($model_id, $excel_data) {
        $team_arr = [
            ['type' => 'adviser', 'letters' => 'A,B,C,D,E', 'key_list' => 'addt_adviser_list'],
            ['type' => 'paraplanner', 'letters' => 'H,I,J,K,L', 'key_list' => 'addt_plan_list'],
            ['type' => 'administration_staff', 'letters' => 'O,P,Q,R,S', 'key_list' => 'addt_admin_list']
        ];
        foreach($team_arr as $team) {
            $letters = explode(',', $team['letters']);
            for($i = 5; $i <= 7; $i++) {
                $data = [];
                if((isset($excel_data[$letters[0] . $i]) && trim($excel_data[$letters[0] . $i]) != '') || (isset($excel_data[$letters[1] . $i]) && trim($excel_data[$letters[1] . $i]) != '')) {
                    $data['md_id'] = $model_id;
                    $data['type'] = $team['type'];
                    $data['name'] = isset($excel_data[$letters[0] . $i]) ? $excel_data[$letters[0] . $i] : '';
                    $data['base_salary'] = isset($excel_data[$letters[1] . $i]) ? toNumeric($excel_data[$letters[1] . $i]) : 0;
                    $data['hours_work_per_week'] = isset($excel_data[$letters[2] . $i]) ? toNumeric($excel_data[$letters[2] . $i]) : 0;
                    $data['percent_related_work'] = isset($excel_data[$letters[3] . $i]) ? toNumeric($excel_data[$letters[3] . $i]) : 0;
                    $data['annual_leave'] = isset($excel_data[$letters[4] . $i]) ? toNumeric($excel_data[$letters[4] . $i]) : 0;
                    $this->team->insert2($data);
                }
            }
            if(isset($excel_data[$team['key_list']])) {
                foreach($excel_data[$team['key_list']] as $row) {
                    $data = [];
                    if((isset($excel_data[$letters[0] . $row]) && trim($excel_data[$letters[0] . $row]) != '') || (isset($excel_data[$letters[1] . $row]) && trim($excel_data[$letters[1] . $row]) != '')) {
                        $data['md_id'] = $model_id;
                        $data['type'] = $team['type'];
                        $data['name'] = isset($excel_data[$letters[0] . $row]) ? $excel_data[$letters[0] . $row] : '';
                        $data['base_salary'] = isset($excel_data[$letters[1] . $row]) ? toNumeric($excel_data[$letters[1] . $row]) : 0;
                        $data['hours_work_per_week'] = isset($excel_data[$letters[2] . $row]) ? toNumeric($excel_data[$letters[2] . $row]) : 0;
                        $data['percent_related_work'] = isset($excel_data[$letters[3] . $row]) ? toNumeric($excel_data[$letters[3] . $row]) : 0;
                        $data['annual_leave'] = isset($excel_data[$letters[4] . $row]) ? toNumeric($excel_data[$letters[4] . $row]) : 0;
                        $this->team->insert2($data);
                    }
                }
            }
        }
    }

    private function migrate_financial_target($model_id, $excel_data) {
        $financial_target['md_id'] = $model_id;
        $financial_target['expenses_last_year'] = isset($excel_data['2B4']) ? toNumeric($excel_data['2B4']) : 0;
        $financial_target['foresee_next_year'] = isset($excel_data['2B5']) && $excel_data['2B5'] == '1' ? 'Yes' : 'No';
        $financial_target['percent_expenses_grow'] = isset($excel_data['2B6']) ? toNumeric($excel_data['2B6']) : 0;
        $financial_target['profit_margin_coming_year'] = isset($excel_data['2B12']) ? toNumeric($excel_data['2B12']) : 0;
        $this->financial_target->insert2($financial_target);
    }

    private function migrate_standard_advice($model_id, $excel_data) {
        $labels = [
            'Pre-meeting engagement', 'Meeting prep', 'Initial meeting', 'Initial meeting debrief', 'Strategy planning',
            'Pre-meeting preparation', 'Second meeting', 'Finalise strategy', 'Prepare SOA', 'Third meeting', 'Implementation',
            'Post implementation follow-up'
        ];
        foreach($labels as $idx => $label) {
            $standard_advice['md_id'] = $model_id;
            $standard_advice['label'] = $label;
            $standard_advice['editable_label'] = 0;
            $standard_advice['time'] = isset($excel_data['4B' . (107 + $idx)]) ? toNumeric($excel_data['4B' . (107 + $idx)]) : 0;
            $standard_advice['producers'] = isset($excel_data['4C' . (107 + $idx)]) ? toNumeric($excel_data['4C' . (107 + $idx)]) : 0;
            $standard_advice['admin'] = isset($excel_data['4D' . (107 + $idx)]) ? toNumeric($excel_data['4D' . (107 + $idx)]) : 0;
            $standard_advice['other_cost'] = isset($excel_data['4E' . (107 + $idx)]) ? toNumeric($excel_data['4E' . (107 + $idx)]) : 0;
            $standard_advice['notes'] = isset($excel_data['4G' . (107 + $idx)]) ? $excel_data['4G' . (107 + $idx)] : '';
            $this->standard_advice->insert2($standard_advice);
        }
        if(isset($excel_data['addt_b1_list'])) {
            foreach($excel_data['addt_b1_list'] as $row) {
                $standard_advice = [];
                if(isset($excel_data['4A' . $row]) && $excel_data['4A' . $row] != '') {
                    $standard_advice['md_id'] = $model_id;
                    $standard_advice['label'] = $excel_data['4A' . $row];
                    $standard_advice['editable_label'] = 1;
                    $standard_advice['time'] = isset($excel_data['4B' . $row]) ? toNumeric($excel_data['4B' . $row]) : 0;
                    $standard_advice['producers'] = isset($excel_data['4C' . $row]) ? toNumeric($excel_data['4C' . $row]) : 0;
                    $standard_advice['admin'] = isset($excel_data['4D' . $row]) ? toNumeric($excel_data['4D' . $row]) : 0;
                    $standard_advice['other_cost'] = isset($excel_data['4E' . $row]) ? toNumeric($excel_data['4E' . $row]) : 0;
                    $standard_advice['notes'] = isset($excel_data['4G' . $row]) ? $excel_data['4G' . $row] : '';
                    $this->standard_advice->insert2($standard_advice);
                }
            }
        }
    }

    private function migrate_transactional_advice($model_id, $excel_data) {
        $labels = [
            'Pre-meeting engagement', 'Meeting prep', 'Initial meeting', 'Initial meeting debrief', 'Strategy planning',
            '', '', '',
            'Prepare SOA', 'Plan presentation', 'Implementation', 'Post implementation follow-up'
        ];
        foreach($labels as $idx => $label) {
            $transactional_advice = [];
            if($label != '') {
                $transactional_advice['md_id'] = $model_id;
                $transactional_advice['label'] = $label;
                $transactional_advice['editable_label'] = 0;
                $transactional_advice['time'] = isset($excel_data['5B' . (107 + $idx)]) ? toNumeric($excel_data['5B' . (107 + $idx)]) : 0;
                $transactional_advice['producers'] = isset($excel_data['5C' . (107 + $idx)]) ? toNumeric($excel_data['5C' . (107 + $idx)]) : 0;
                $transactional_advice['admin'] = isset($excel_data['5D' . (107 + $idx)]) ? toNumeric($excel_data['5D' . (107 + $idx)]) : 0;
                $transactional_advice['other_cost'] = isset($excel_data['5E' . (107 + $idx)]) ? toNumeric($excel_data['5E' . (107 + $idx)]) : 0;
                $transactional_advice['notes'] = isset($excel_data['5G' . (107 + $idx)]) ? $excel_data['5G' . (107 + $idx)] : '';
                $this->transactional_advice->insert2($transactional_advice);
            }
        }
        if(isset($excel_data['addt_b2_list'])) {
            foreach($excel_data['addt_b2_list'] as $row) {
                $transactional_advice = [];
                if(isset($excel_data['5A' . $row]) && $excel_data['5A' . $row] != '') {
                    $transactional_advice['md_id'] = $model_id;
                    $transactional_advice['label'] = $excel_data['5A' . $row];
                    $transactional_advice['editable_label'] = 1;
                    $transactional_advice['time'] = isset($excel_data['5B' . $row]) ? toNumeric($excel_data['5B' . $row]) : 0;
                    $transactional_advice['producers'] = isset($excel_data['5C' . $row]) ? toNumeric($excel_data['5C' . $row]) : 0;
                    $transactional_advice['admin'] = isset($excel_data['5D' . $row]) ? toNumeric($excel_data['5D' . $row]) : 0;
                    $transactional_advice['other_cost'] = isset($excel_data['5E' . $row]) ? toNumeric($excel_data['5E' . $row]) : 0;
                    $transactional_advice['notes'] = isset($excel_data['5G' . $row]) ? $excel_data['5G' . $row] : '';
                    $this->transactional_advice->insert2($transactional_advice);
                }
            }
        }
    }

    private function migrate_strategy_variation($model_id, $excel_data) {
        $labels = [
            'Establish new SMSF', 'Advise on existing SMSF', 'Equity portfolio', 'Personal protection', 'Aged Care',
            'Business Insurance', 'Estate Planning', 'Financing', 'Complex investment scenarios', 'International affairs',
            'Mortgage lending', 'Travel to client', 'Finance', 'Self-employed business client', 'Redundancy package',
            'Aged Care'
        ];
        foreach($labels as $idx => $label) {
            $strategy_variation = [];
            if($label != '') {
                $strategy_variation['md_id'] = $model_id;
                $strategy_variation['area_look_at'] = isset($excel_data['6A' . (5 + $idx)]) ? 1 : 0;
                $strategy_variation['label'] = isset($excel_data['6B' . (5 + $idx)]) && $excel_data['6B' . (5 + $idx)] != '' ? $excel_data['6B' . (5 + $idx)] : $label;
                $strategy_variation['editable_label'] = 1;
                $strategy_variation['time'] = isset($excel_data['6C' . (5 + $idx)]) ? toNumeric($excel_data['6C' . (5 + $idx)]) : 0;
                $strategy_variation['producers'] = isset($excel_data['6D' . (5 + $idx)]) ? toNumeric($excel_data['6D' . (5 + $idx)]) : 0;
                $strategy_variation['admin'] = isset($excel_data['6E' . (5 + $idx)]) ? toNumeric($excel_data['6E' . (5 + $idx)]) : 0;
                $strategy_variation['other_cost'] = isset($excel_data['6F' . (5 + $idx)]) ? toNumeric($excel_data['6F' . (5 + $idx)]) : 0;
                $this->strategy_variation->insert2($strategy_variation);
            }
        }
        if(isset($excel_data['addt_b3_list'])) {
            foreach($excel_data['addt_b3_list'] as $row) {
                $strategy_variation = [];
                if(isset($excel_data['6B' . $row]) && $excel_data['6B' . $row] != '') {
                    $strategy_variation['md_id'] = $model_id;
                    $strategy_variation['area_look_at'] = isset($excel_data['6A' . $row]) ? 1 : 0;
                    $strategy_variation['label'] = $excel_data['6B' . $row];
                    $strategy_variation['editable_label'] = 1;
                    $strategy_variation['time'] = isset($excel_data['6C' . $row]) ? toNumeric($excel_data['6C' . $row]) : 0;
                    $strategy_variation['producers'] = isset($excel_data['6D' . $row]) ? toNumeric($excel_data['6D' . $row]) : 0;
                    $strategy_variation['admin'] = isset($excel_data['6E' . $row]) ? toNumeric($excel_data['6E' . $row]) : 0;
                    $strategy_variation['other_cost'] = isset($excel_data['6F' . $row]) ? toNumeric($excel_data['6F' . $row]) : 0;
                    $this->strategy_variation->insert2($strategy_variation);
                }
            }
        }
    }

    private function migrate_one_one_service($model_id, $excel_data) {
        $labels = [
            'Complete Strategy Review', 'Simple performance review', 'Insurance Review', 'Touch-base phone call', 'Phone/ online meeting',
            'Face-to-face meeting', 'Meet with client\'s advisers', 'Send portfolio report', 'Changes to portfolio', 'End of Year tax report',
            'Response to unique event', 'Record of Advice', 'Statement of Advice'
        ];
        foreach($labels as $idx => $label) {
            $one_one_service = [];
            if($label != '') {
                $one_one_service['md_id'] = $model_id;
                $one_one_service['consider_offer'] = isset($excel_data['7A' . (5 + $idx)]) ? 1 : 0;
                $one_one_service['label'] = isset($excel_data['7B' . (5 + $idx)]) && $excel_data['7B' . (5 + $idx)] != '' ? $excel_data['7B' . (5 + $idx)] : $label;
                $one_one_service['editable_label'] = 1;
                $one_one_service['time'] = isset($excel_data['7C' . (5 + $idx)]) ? toNumeric($excel_data['7C' . (5 + $idx)]) : 0;
                $one_one_service['producers'] = isset($excel_data['7D' . (5 + $idx)]) ? toNumeric($excel_data['7D' . (5 + $idx)]) : 0;
                $one_one_service['admin'] = isset($excel_data['7E' . (5 + $idx)]) ? toNumeric($excel_data['7E' . (5 + $idx)]) : 0;
                $one_one_service['other_cost'] = isset($excel_data['7F' . (5 + $idx)]) ? toNumeric($excel_data['7F' . (5 + $idx)]) : 0;
                $service_id = $this->one_one_service->insert2($one_one_service);
                $service_data = [
                    "service_1" => isset($excel_data['serviceB' . (5 + $idx)]) ? toNumeric($excel_data['serviceB' . (5 + $idx)]) : 0,
                    "service_2" => isset($excel_data['serviceD' . (5 + $idx)]) ? toNumeric($excel_data['serviceD' . (5 + $idx)]) : 0,
                    "service_3" => isset($excel_data['serviceF' . (5 + $idx)]) ? toNumeric($excel_data['serviceF' . (5 + $idx)]) : 0,
                    "service_4" => isset($excel_data['serviceH' . (5 + $idx)]) ? toNumeric($excel_data['serviceH' . (5 + $idx)]) : 0,
                    "service_5" => isset($excel_data['serviceJ' . (5 + $idx)]) ? toNumeric($excel_data['serviceJ' . (5 + $idx)]) : 0,
                    "service_6" => isset($excel_data['serviceL' . (5 + $idx)]) ? toNumeric($excel_data['serviceL' . (5 + $idx)]) : 0,
                    "service_7" => isset($excel_data['serviceN' . (5 + $idx)]) ? toNumeric($excel_data['serviceN' . (5 + $idx)]) : 0
                ];
                $this->migrate_service_offering($service_id, "one_to_one", $service_data);
            }
        }
        if(isset($excel_data['addt_c1_list'])) {
            foreach($excel_data['addt_c1_list'] as $row) {
                $one_one_service = [];
                if(isset($excel_data['7B' . $row]) && $excel_data['7B' . $row] != '') {
                    $one_one_service['md_id'] = $model_id;
                    $one_one_service['consider_offer'] = isset($excel_data['7A' . $row]) ? 1 : 0;
                    $one_one_service['label'] = $excel_data['7B' . $row];
                    $one_one_service['editable_label'] = 1;
                    $one_one_service['time'] = isset($excel_data['7C' . $row]) ? toNumeric($excel_data['7C' . $row]) : 0;
                    $one_one_service['producers'] = isset($excel_data['7D' . $row]) ? toNumeric($excel_data['7D' . $row]) : 0;
                    $one_one_service['admin'] = isset($excel_data['7E' . $row]) ? toNumeric($excel_data['7E' . $row]) : 0;
                    $one_one_service['other_cost'] = isset($excel_data['7F' . $row]) ? toNumeric($excel_data['7F' . $row]) : 0;
                    $service_id = $this->one_one_service->insert2($one_one_service);
                    $service_data = [
                        "service_1" => isset($excel_data['serviceB' . $row]) ? toNumeric($excel_data['serviceB' . $row]) : 0,
                        "service_2" => isset($excel_data['serviceD' . $row]) ? toNumeric($excel_data['serviceD' . $row]) : 0,
                        "service_3" => isset($excel_data['serviceF' . $row]) ? toNumeric($excel_data['serviceF' . $row]) : 0,
                        "service_4" => isset($excel_data['serviceH' . $row]) ? toNumeric($excel_data['serviceH' . $row]) : 0,
                        "service_5" => isset($excel_data['serviceJ' . $row]) ? toNumeric($excel_data['serviceJ' . $row]) : 0,
                        "service_6" => isset($excel_data['serviceL' . $row]) ? toNumeric($excel_data['serviceL' . $row]) : 0,
                        "service_7" => isset($excel_data['serviceN' . $row]) ? toNumeric($excel_data['serviceN' . $row]) : 0
                    ];
                    $this->migrate_service_offering($service_id, "one_to_one", $service_data);
                }
            }
        }
    }

    private function migrate_one_many_service($model_id, $excel_data) {
        $labels = [
            'Newsletter', 'Educational seminar', 'Prestige event', 'Offer of review', 'FDS statements',
            'Webinar', 'Online Knowledge Centre Area', 'Budget Update'
        ];
        foreach($labels as $idx => $label) {
            $one_many_service = [];
            if($label != '') {
                $one_many_service['md_id'] = $model_id;
                $one_many_service['consider_offer'] = isset($excel_data['8A' . (5 + $idx)]) ? 1 : 0;
                $one_many_service['label'] = isset($excel_data['8B' . (5 + $idx)]) && $excel_data['8B' . (5 + $idx)] != '' ? $excel_data['8B' . (5 + $idx)] : $label;
                $one_many_service['editable_label'] = 1;
                $one_many_service['time'] = isset($excel_data['8C' . (5 + $idx)]) ? toNumeric($excel_data['8C' . (5 + $idx)]) : 0;
                $one_many_service['producers'] = isset($excel_data['8D' . (5 + $idx)]) ? toNumeric($excel_data['8D' . (5 + $idx)]) : 0;
                $one_many_service['admin'] = isset($excel_data['8E' . (5 + $idx)]) ? toNumeric($excel_data['8E' . (5 + $idx)]) : 0;
                $one_many_service['other_cost'] = isset($excel_data['8F' . (5 + $idx)]) ? toNumeric($excel_data['8F' . (5 + $idx)]) : 0;
                $one_many_service['other_cost'] = isset($excel_data['8G' . (5 + $idx)]) ? toNumeric($excel_data['8G' . (5 + $idx)]) : 0;
                $service_id = $this->one_many_service->insert2($one_many_service);
                $service_data = [
                    "service_1" => isset($excel_data['serviceB' . (105 + $idx)]) ? toNumeric($excel_data['serviceB' . (105 + $idx)]) : 0,
                    "service_2" => isset($excel_data['serviceD' . (105 + $idx)]) ? toNumeric($excel_data['serviceD' . (105 + $idx)]) : 0,
                    "service_3" => isset($excel_data['serviceF' . (105 + $idx)]) ? toNumeric($excel_data['serviceF' . (105 + $idx)]) : 0,
                    "service_4" => isset($excel_data['serviceH' . (105 + $idx)]) ? toNumeric($excel_data['serviceH' . (105 + $idx)]) : 0,
                    "service_5" => isset($excel_data['serviceJ' . (105 + $idx)]) ? toNumeric($excel_data['serviceJ' . (105 + $idx)]) : 0,
                    "service_6" => isset($excel_data['serviceL' . (105 + $idx)]) ? toNumeric($excel_data['serviceL' . (105 + $idx)]) : 0,
                    "service_7" => isset($excel_data['serviceN' . (105 + $idx)]) ? toNumeric($excel_data['serviceN' . (105 + $idx)]) : 0
                ];
                $this->migrate_service_offering($service_id, "one_to_many", $service_data);
            }
        }
        if(isset($excel_data['addt_c2_list'])) {
            foreach($excel_data['addt_c2_list'] as $row) {
                $one_many_service = [];
                if(isset($excel_data['8B' . $row]) && $excel_data['8B' . $row] != '') {
                    $one_many_service['md_id'] = $model_id;
                    $one_many_service['consider_offer'] = isset($excel_data['8A' . $row]) ? 1 : 0;
                    $one_many_service['label'] = $excel_data['8B' . $row];
                    $one_many_service['editable_label'] = 1;
                    $one_many_service['time'] = isset($excel_data['8C' . $row]) ? toNumeric($excel_data['8C' . $row]) : 0;
                    $one_many_service['producers'] = isset($excel_data['8D' . $row]) ? toNumeric($excel_data['8D' . $row]) : 0;
                    $one_many_service['admin'] = isset($excel_data['8E' . $row]) ? toNumeric($excel_data['8E' . $row]) : 0;
                    $one_many_service['other_cost'] = isset($excel_data['8F' . $row]) ? toNumeric($excel_data['8F' . $row]) : 0;
                    $one_many_service['other_cost'] = isset($excel_data['8G' . $row]) ? toNumeric($excel_data['8G' . $row]) : 0;
                    $service_id = $this->one_many_service->insert2($one_many_service);
                    $service_data = [
                        "service_1" => isset($excel_data['serviceB1' . $row]) ? toNumeric($excel_data['serviceB1' . $row]) : 0,
                        "service_2" => isset($excel_data['serviceD1' . $row]) ? toNumeric($excel_data['serviceD1' . $row]) : 0,
                        "service_3" => isset($excel_data['serviceF1' . $row]) ? toNumeric($excel_data['serviceF1' . $row]) : 0,
                        "service_4" => isset($excel_data['serviceH1' . $row]) ? toNumeric($excel_data['serviceH1' . $row]) : 0,
                        "service_5" => isset($excel_data['serviceJ1' . $row]) ? toNumeric($excel_data['serviceJ1' . $row]) : 0,
                        "service_6" => isset($excel_data['serviceL1' . $row]) ? toNumeric($excel_data['serviceL1' . $row]) : 0,
                        "service_7" => isset($excel_data['serviceN1' . $row]) ? toNumeric($excel_data['serviceN1' . $row]) : 0
                    ];
                    $this->migrate_service_offering($service_id, "one_to_many", $service_data);
                }
            }
        }
    }

    private function migrate_strategy_management($model_id, $excel_data) {
        $labels = [
            'High-touch client', 'SMSF', 'Equity portfolio', 'Personal protection', 'Additional research', 'Business Insurance',
            'Estate Planning', 'Tax returns', 'Complex investment scenarios', 'International affairs', 'Mortgage lending',
            'Travel to client', 'Tax returns', 'Self-employed business client', 'Redundancy package', 'Additional research'
        ];
        foreach($labels as $idx => $label) {
            $strategy_management = [];
            if($label != '') {
                $strategy_management['md_id'] = $model_id;
                $strategy_management['area_look_at'] = isset($excel_data['9A' . (5 + $idx)]) ? 1 : 0;
                $strategy_management['label'] = isset($excel_data['9B' . (5 + $idx)]) && $excel_data['9B' . (5 + $idx)] != '' ? $excel_data['9B' . (5 + $idx)] : $label;
                $strategy_management['editable_label'] = 1;
                $strategy_management['time'] = isset($excel_data['9C' . (5 + $idx)]) ? toNumeric($excel_data['9C' . (5 + $idx)]) : 0;
                $strategy_management['producers'] = isset($excel_data['9D' . (5 + $idx)]) ? toNumeric($excel_data['9D' . (5 + $idx)]) : 0;
                $strategy_management['admin'] = isset($excel_data['9E' . (5 + $idx)]) ? toNumeric($excel_data['9E' . (5 + $idx)]) : 0;
                $strategy_management['other_cost'] = isset($excel_data['9F' . (5 + $idx)]) ? toNumeric($excel_data['9F' . (5 + $idx)]) : 0;
                $this->strategy_management->insert2($strategy_management);
            }
        }
        if(isset($excel_data['addt_c3_list'])) {
            foreach($excel_data['addt_c3_list'] as $row) {
                $strategy_management = [];
                if(isset($excel_data['9B' . $row]) && $excel_data['9B' . $row] != '') {
                    $strategy_management['md_id'] = $model_id;
                    $strategy_management['area_look_at'] = isset($excel_data['9A' . $row]) ? 1 : 0;
                    $strategy_management['label'] = $excel_data['9B' . $row];
                    $strategy_management['editable_label'] = 1;
                    $strategy_management['time'] = isset($excel_data['9C' . $row]) ? toNumeric($excel_data['9C' . $row]) : 0;
                    $strategy_management['producers'] = isset($excel_data['9D' . $row]) ? toNumeric($excel_data['9D' . $row]) : 0;
                    $strategy_management['admin'] = isset($excel_data['9E' . $row]) ? toNumeric($excel_data['9E' . $row]) : 0;
                    $strategy_management['other_cost'] = isset($excel_data['9F' . $row]) ? toNumeric($excel_data['9F' . $row]) : 0;
                    $this->strategy_management->insert2($strategy_management);
                }
            }
        }
    }

    private function migrate_service_offering($service_id, $service_type, $service_data) {
        $default_service = ["service_1" => 0, "service_2" => 0, "service_3" => 0, "service_4" => 0, "service_5" => 0, "service_6" => 0, "service_7" => 0];
        $service = is_null($service_data) ? $default_service : $service_data;
        $service["service_id"] = $service_id;
        $service["service_type"] = $service_type;
        $this->service_offering->insert2($service);
    }

    private function migrate_other_data($model_id, $excel_data) {
        $other = [
            "bonus_paid_adviser" => isset($excel_data['B109']) ? toNumeric($excel_data['B109']) : 0,
            "other_cost_adviser" => isset($excel_data['B110']) ? toNumeric($excel_data['B110']) : 0,
            "bonus_paid_paraplanner" => isset($excel_data['I109']) ? toNumeric($excel_data['I109']) : 0,
            "other_cost_paraplanner" => isset($excel_data['I110']) ? toNumeric($excel_data['I110']) : 0,
            "bonus_paid_administration_staff" => isset($excel_data['P109']) ? toNumeric($excel_data['P109']) : 0,
            "other_cost_administration_staff" => isset($excel_data['P110']) ? toNumeric($excel_data['P110']) : 0
        ];
        $other['service_names'] = json_encode([
            isset($stored['serviceA3']) ? $stored['serviceA3'] : 'Platinum',
            isset($stored['serviceB3']) ? $stored['serviceB3'] : 'Gold',
            isset($stored['serviceC3']) ? $stored['serviceC3'] : 'Enter name',
            isset($stored['serviceD3']) ? $stored['serviceD3'] : 'Enter name',
            isset($stored['serviceE3']) ? $stored['serviceE3'] : 'Enter name',
            isset($stored['serviceF3']) ? $stored['serviceF3'] : 'Enter name',
            isset($stored['serviceG3']) ? $stored['serviceG3'] : 'Enter name'
        ]);
        foreach($other as $key => $val) {
            $data = ["md_id" => $model_id, "label" => $key, "value" => toNumeric($val)];
            if($key == "service_names") {
                $data = ["md_id" => $model_id, "label" => $key, "value" => $val];
            }
            $this->other_data->insert2($data);
        }
    }
}

?>