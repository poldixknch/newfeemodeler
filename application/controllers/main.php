<?php

class Main extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('data');
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

    function oldindex() {
        $get = $this->input->get();

        $where = null;
        $like = null;
        if ($get)
            $like['name'] = $get['name_like'];
        if ($this->session->userdata('role') != 'admin')
            $where['uid'] = $this->session->userdata('uid');
        $data['stored'] = $this->data->findAll($where, $like);

        $data['page'] = 'file-list';
        parent::load_view($data);
    }

    function index() {
        $data['custom_js'] = [
            'json/defaults',
            'controllers/ListsController'
        ];
        $data['page'] = 'file-list';
        $this->load->template('lists/container', $data);
    }

    function create() {
        $this->show('');
    }

    function createold() {
        parent::load_view();
    }

    function free() {
        if($this->session->userdata('role')) {
            redirect('/main/create', 'refresh');
        } else {
            $this->show('');
            // parent::load_view();
        }
    }

    function show($primary_key) {
        $data['custom_js'] = [
            'json/defaults',
            'controllers/CalculatorController'
        ];
        if($primary_key != '') {
            $model_data = $this->model_data->load($primary_key);
            if(!$model_data) {
                show_404();
            }
            if($model_data["uid"] != $this->session->userdata("uid") && $this->session->userdata("role") != "admin") {
                show_404();
            }
        }
        $data['action'] = $primary_key != '' ? 'create' : 'update';
        $data['data_id'] = $primary_key;
        $this->load->template('calculator/container', $data);
    }

    function store() {
        if (!$this->input->post())
            return false;
        $id_data = $this->data->insert(json_decode($this->input->post()['values'],true));
        echo $id_data;
    }

    function show_old($primary_key) {
        $data['stored'] = $this->data->load($primary_key);
        if (!$data['stored'])
            show_404();
        parent::load_view($data);
    }

    function getLists() {
        $lists = $this->model_data->getLists();
        die(json_encode(array("datas" => $lists)));
    }

    function getDatas($primary_key) {
        $model_data = $this->model_data->load($primary_key);
        $no_md = $this->input->get("no_md") == true;
        
        // get team datas
        $team_data = $this->team->findAll("md_id = {$model_data['md_id']}", true);
        $team_data_return = [];
        foreach($team_data as &$tdata) {
            $type = $tdata["type"];
            if($no_md) {
                unset($tdata["md_id"]);
                unset($tdata["td_id"]);
            }
            $team_data_return[$type][] = $tdata;
        }

        // get financial target data
        $financial_target_data = $this->financial_target->find("md_id = {$model_data['md_id']}");
        if($no_md) {
            unset($financial_target_data["md_id"]);
            unset($financial_target_data["ftd_id"]);
        }

        // get standard advice data
        $standard_advice_data = $this->standard_advice->findAll("md_id = {$model_data['md_id']}", true);
        $standard_advice_return = [];
        foreach($standard_advice_data as $sadata) {
            if($no_md) {
                unset($sadata["md_id"]);
                unset($sadata["sad_id"]);
            }
            $standard_advice_return[] = $sadata;
        }

        // get transactional advice data
        $transactional_advice_data = $this->transactional_advice->findAll("md_id = {$model_data['md_id']}", true);
        $transactional_advice_return = [];
        foreach($transactional_advice_data as $tadata) {
            if($no_md) {
                unset($tadata["md_id"]);
                unset($tadata["tad_id"]);
            }
            $transactional_advice_return[] = $tadata;
        }

        // get strategy variation data
        $strategy_variation_data = $this->strategy_variation->findAll("md_id = {$model_data['md_id']}", true);
        $strategy_variation_return = [];
        foreach($strategy_variation_data as $svdata) {
            if($no_md) {
                unset($svdata["md_id"]);
                unset($svdata["svd_id"]);
            }
            $strategy_variation_return[] = $svdata;
        }

        // get one to one service data
        $one_one_service_data = $this->one_one_service->findAllWithService("md_id = {$model_data['md_id']}", true);
        $one_one_service_return = [];
        foreach($one_one_service_data as $oosdata) {
            if($no_md) {
                unset($oosdata["md_id"]);
                unset($oosdata["oosd_id"]);
            }
            $one_one_service_return[] = $oosdata;
        }

        // get one to many service data
        $one_many_service_data = $this->one_many_service->findAllWithService("md_id = {$model_data['md_id']}", true);
        $one_many_service_return = [];
        foreach($one_many_service_data as $omsdata) {
            if($no_md) {
                unset($omsdata["md_id"]);
                unset($omsdata["omsd_id"]);
            }
            $one_many_service_return[] = $omsdata;
        }

        // get strategy management data
        $strategy_management_data = $this->strategy_management->findAll("md_id = {$model_data['md_id']}", true);
        $strategy_management_return = [];
        foreach($strategy_management_data as $smdata) {
            if($no_md) {
                unset($smdata["md_id"]);
                unset($smdata["sm_id"]);
            }
            $strategy_management_return[] = $smdata;
        }

        // get strategy variation data
        $strategy_variation_data = $this->strategy_variation->findAll("md_id = {$model_data['md_id']}", true);
        $strategy_variation_return = [];
        foreach($strategy_variation_data as $svdata) {
            if($no_md) {
                unset($svdata["md_id"]);
                unset($svdata["svd_id"]);
            }
            $strategy_variation_return[] = $svdata;
        }

        // get other datas
        $other_data = $this->other_data->findAll("md_id = {$model_data['md_id']}", true);
        $other_data_return = [];
        $service_names = [];
        foreach($other_data as $odata) {
            if($odata["label"] == "service_names") {
                $service_names = json_decode($odata["value"]);
            } else {
                $other_data_return[$odata["label"]] = $odata["value"];
            }
        }

        die(json_encode(
            [
                "success" => true,
                "data" => [
                    "file_name" => $model_data["file_name"],
                    "sn" => $service_names,
                    "od" => $other_data_return,
                    "ft" => $financial_target_data,
                    "oms" => $one_many_service_return,
                    "oos" => $one_one_service_return,
                    "sad" => $standard_advice_return,
                    "smd" => $strategy_management_return,
                    "svd" => $strategy_variation_return,
                    "td" => $team_data_return,
                    "tad" => $transactional_advice_data
                ]
            ]
        ));
    }

    function saveData() {
        $file_name = $this->input->post("file_name");
        $md_id = $this->input->post("data_id");
        $team = $this->input->post("team");
        $financial_target = $this->input->post("financial_target");
        $standard_advice = $this->input->post("standard_advice");
        $transactional_advice = $this->input->post("transactional_advice");
        $strategy_variation = $this->input->post("strategy_variation");
        $one_to_one_service = $this->input->post("one_to_one_service");
        $one_to_many_service = $this->input->post("one_to_many_service");
        $strategy_management = $this->input->post("strategy_management");
        $service_names = $this->input->post("service_names");
        $other = $this->input->post("other");
        $data = null;
        $action = "create";
        if(!is_null($md_id) && $md_id != "") {
            $model_data = $this->model_data->load($md_id);
            if(!$model_data) {
                die(json_encode(array("success" => false, "message" => "Model calculator not found.")));
            }
            if($model_data["uid"] != $this->session->userdata("uid") && $this->session->userdata("role") != "admin") {
                die(json_encode(array("success" => false, "message" => "Model calculator not found.")));
            }
            $primary_key = $model_data["md_id"];
            $this->model_data->update($primary_key);
            $action = "update";
        } else {
            $primary_key = $this->model_data->insert();
        }

        // save team
        $td_ids = [];
        foreach($team as $team_info) {
            foreach($team_info["datas"] as $data) {
                if(trim($data["name"]) != "" || trim($data["base_salary"]) != "") {
                    $data["md_id"] = $primary_key;
                    $data["type"] = $team_info["type"];
                    $data["base_salary"] = toNumeric($data["base_salary"]);
                    $data["percent_related_work"] = toNumeric($data["percent_related_work"]);
                    $data["annual_leave"] = toNumeric($data["annual_leave"]);
                    $data["hours_work_per_week"] = toNumeric($data["hours_work_per_week"]);
                    if(isset($data["td_id"])) {
                        $td_ids[] = $data["td_id"];
                        $this->team->update($data);
                    } else {
                        $td_ids[] = $this->team->insert2($data);
                    }
                }
            }
        }
        // delete removed
        if($action == "update" && count($td_ids) > 0) {
            if(count($td_ids) > 0)
                $this->team->delete_not_in(["md_id" => $primary_key], "td_id", $td_ids);
            else
                $this->team->deleteWhere(["md_id" => $primary_key]);
        }

        // save financial target
        $financial_target["md_id"] = $primary_key;
        $financial_target["expenses_last_year"] = toNumeric($financial_target["expenses_last_year"]);
        if(isset($financial_target["ftd_id"])) {
            $this->financial_target->update($financial_target);
        } else {
            $this->financial_target->insert2($financial_target);
        }

        // save standard advice
        $sad_ids = [];
        foreach($standard_advice as $data) {
            if($data["label"] != "") {
                $data["md_id"] = $primary_key;
                $data["time"] = toNumeric($data["time"]);
                $data["producers"] = toNumeric($data["producers"]);
                $data["admin"] = toNumeric($data["admin"]);
                $data["other_cost"] = toNumeric($data["other_cost"]);
                if(isset($data["sad_id"])) {
                    $sad_ids[] = $data["sad_id"];
                    $this->standard_advice->update($data);
                } else {
                    $sad_ids[] = $this->standard_advice->insert2($data);
                }
            }
        }
        // delete removed
        if($action == "update") {
            if(count($sad_ids) > 0)
                $this->standard_advice->delete_not_in(["md_id" => $primary_key], "sad_id", $sad_ids);
            else
                $this->standard_advice->deleteWhere(["md_id" => $primary_key]);
        }

        // save transactional advice
        $tad_ids = [];
        foreach($transactional_advice as $data) {
            $data["md_id"] = $primary_key;
            $data["time"] = toNumeric($data["time"]);
            $data["producers"] = toNumeric($data["producers"]);
            $data["admin"] = toNumeric($data["admin"]);
            $data["other_cost"] = toNumeric($data["other_cost"]);
            if(isset($data["tad_id"])) {
                $tad_ids[] = $data["tad_id"];
                $this->transactional_advice->update($data);
            } else {
                $tad_ids[] = $this->transactional_advice->insert2($data);
            }
        }
        // delete removed
        if($action == "update") {
            if(count($tad_ids) > 0)
                $this->transactional_advice->delete_not_in(["md_id" => $primary_key], "tad_id", $tad_ids);
            else
                $this->transactional_advice->deleteWhere(["md_id" => $primary_key]);
        }

        // save strategy variation
        $svd_ids = [];
        foreach($strategy_variation as $data) {
            $data["md_id"] = $primary_key;
            $data["time"] = toNumeric($data["time"]);
            $data["producers"] = toNumeric($data["producers"]);
            $data["admin"] = toNumeric($data["admin"]);
            $data["other_cost"] = toNumeric($data["other_cost"]);
            if(isset($data["svd_id"])) {
                $svd_ids[] = $data["svd_id"];
                $this->strategy_variation->update($data);
            } else {
                $svd_ids[] = $this->strategy_variation->insert2($data);
            }
        }
        // delete removed
        if($action == "update") {
            if(count($svd_ids) > 0)
                $this->strategy_variation->delete_not_in(["md_id" => $primary_key], "svd_id", $svd_ids);
            else
                $this->strategy_variation->deleteWhere(["md_id" => $primary_key]);
        }

        $default_service = ["service_1" => 0, "service_2" => 0, "service_3" => 0, "service_4" => 0, "service_5" => 0, "service_6" => 0, "service_7" => 0];
        // save one to one service
        $oosd_ids = [];
        foreach($one_to_one_service as $data) {
            $service = $default_service;
            if(isset($data["service_offering"])) {
                $service = $data["service_offering"];
                unset($data["service_offering"]);
            }
            for($i=1;$i <= 7; $i++) {
                $service["service_" . $i] = toNumeric($service["service_" . $i]);
            }

            $data["md_id"] = $primary_key;
            $data["time"] = toNumeric($data["time"]);
            $data["producers"] = toNumeric($data["producers"]);
            $data["admin"] = toNumeric($data["admin"]);
            $data["other_cost"] = toNumeric($data["other_cost"]);
            if(isset($data["oosd_id"])) {
                $this->one_one_service->update($data);
                $service_id = $data["oosd_id"];
                $this->service_offering->updateWhere($service, ["service_id" => $service_id, "service_type" => "one_to_one"]);
            } else {
                $service_id = $this->one_one_service->insert2($data);
                // save service offering
                $service["service_id"] = $service_id;
                $service["service_type"] = "one_to_one";
                $this->service_offering->insert2($service);
            }
            $oosd_ids[] = $service_id;
        }
        // delete removed
        if($action == "update") {
            if(count($oosd_ids) > 0)
                $this->one_one_service->delete_not_in(["md_id" => $primary_key], "oosd_id", $oosd_ids);
            else
                $this->one_one_service->deleteWhere(["md_id" => $primary_key]);
        }

        // save one to many service
        $omsd_ids = [];
        foreach($one_to_many_service as $data) {
            unset($data["oms_id"]);
            $service = $default_service;
            if(isset($data["service_offering"])) {
                $service = $data["service_offering"];
                unset($data["service_offering"]);
            }
            for($i=1;$i <= 7; $i++) {
                $service["service_" . $i] = toNumeric($service["service_" . $i]);
            }
            $data["md_id"] = $primary_key;
            $data["time"] = toNumeric($data["time"]);
            $data["producers"] = toNumeric($data["producers"]);
            $data["admin"] = toNumeric($data["admin"]);
            $data["other_cost"] = toNumeric($data["other_cost"]);
            $data["people"] = toNumeric($data["people"]);
            if(isset($data["omsd_id"])) {
                $this->one_many_service->update($data);
                $service_id = $data["omsd_id"];
                $this->service_offering->updateWhere($service, ["service_id" => $service_id, "service_type" => "one_to_many"]);
            } else {
                $service_id = $this->one_many_service->insert2($data);
                // save service offering
                $service["service_id"] = $service_id;
                $service["service_type"] = "one_to_many";
                $this->service_offering->insert2($service);
            }
            $omsd_ids[] = $service_id;
        }
        // delete removed
        if($action == "update") {
            if(count($omsd_ids) > 0)
                $this->one_many_service->delete_not_in(["md_id" => $primary_key], "omsd_id", $omsd_ids);
            else
                $this->one_many_service->deleteWhere(["md_id" => $primary_key]);
        }

        // save strategy management
        $sm_ids = [];
        foreach($strategy_management as $data) {
            $data["md_id"] = $primary_key;
            $data["time"] = toNumeric($data["time"]);
            $data["producers"] = toNumeric($data["producers"]);
            $data["admin"] = toNumeric($data["admin"]);
            $data["other_cost"] = toNumeric($data["other_cost"]);
            if(isset($data["sm_id"])) {
                $sm_ids[] = $data["sm_id"];
                $this->strategy_management->update($data);
            } else {
                $sm_ids[] = $this->strategy_management->insert2($data);
            }
        }
        // delete removed
        if($action == "update") {
            if(count($sm_ids) > 0)
                $this->strategy_management->delete_not_in(["md_id" => $primary_key], "sm_id", $sm_ids);
            else
                $this->strategy_management->deleteWhere(["md_id" => $primary_key]);
        }

        // save other datas
        foreach($other as $key => $val) {
            $other_data = $this->other_data->findByLabel($primary_key, $key);
            if($other_data) {
                $other_data["label"] = $key;
                $other_data["value"] = toNumeric($val);
                $this->other_data->update($other_data);
            } else {
                $data = ["md_id" => $primary_key, "label" => $key, "value" => toNumeric($val)];
                $this->other_data->insert2($data);
            }
        }

        // save service name datas
        $other_data = $this->other_data->findByLabel($primary_key, "service_names");
        if($other_data) {
            $other_data["value"] = json_encode($service_names);
            $this->other_data->update($other_data);
        } else {
            $service_data = ["md_id" => $primary_key, "label" => "service_names", "value" => json_encode($service_names)];
            $this->other_data->insert2($service_data);
        }
        die(json_encode(array("success" => true, "md_id" => $primary_key)));
    }

    function update($primary_key) {
        if (!$this->input->post())
            return false;
        $this->data->update(json_decode($this->input->post()['values'],true), $primary_key);
        echo $primary_key;
    }

    function delete($id, $confirmed = false) {
        if (!$confirmed)
            parent::load_view(array('page' => 'confirm'));
        else {

            $this->session->set_flashdata('message', $this->model_data->delete($id));
            redirect(base_url());
        }
    }

    function replicate($id) {
        $this->data->replicate($id, $this->input->post('new_name'));
        redirect(base_url());
    }

    function pdf_final() {
        try {
            $post = $this->input->post();
            $this->load->view('pdf/getpdf_final2', $post);
            $html = $this->output->get_output();
            $this->load->library('dompdf_gen');
            $this->dompdf->load_html($html);
            $this->dompdf->set_paper('letter','landscape');
            $this->dompdf->set_option('isRemoteEnabled', TRUE);
            $this->dompdf->render();
            $this->dompdf->stream("fee model calculator final - " . str_replace('/', '-', $post["date"]) . ".pdf");
        } catch(Exception $error) {
            die(var_dump($error));
        }
    }

    function pdf_d1() {
        $post = $this->input->post();
        $this->load->view('pdf/getpdf_d1', $post);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->set_paper('letter','landscape');
        $this->dompdf->render();
        $this->dompdf->stream("fee model calculator.pdf");
    }

    function print_final() {
        $this->load->view('print/print_final2', $this->input->post());
    }

    function print_d1() {
        $this->load->view('print/print_d1', $this->input->post());
    }

    function download_report() {
        $this->load->library('excel');

        $sheets = $this->data->getExcelData();
        $sheet_number = 0;
        foreach ($sheets as $sheet) {
            $this->excel->createSheet($sheet_number);
            $this->excel->setActiveSheetIndex($sheet_number);
            $row_number = 1;
            foreach ($sheet as $row) {
                $cell_number = 'A';
                foreach ($row as $cell) {
                    $this->excel->getActiveSheet()->setCellValue($cell_number.$row_number, $cell);
                    $cell_number++;
                }
                $row_number++;
            }
            $this->excel->getActiveSheet()->setTitle($sheet_number > 0 ? "A$sheet_number" : 'Users');
            $sheet_number++;
        }

        $today = new DateTime();
        $filename = "Print Report Per " . $today->format('d-m-Y') . '.xlsx';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
        $objWriter->save('php://output');
    }

}
