<?php
class Matakuliah extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_matakuliah');
        $this->load->library('form_validation');
        $this->load->library('excel');
	}
	function index(){
        $data['matkul'] = $this->m_matakuliah->tampil_matkul();
        $this->load->view("matakuliah/v_tampil_matkul", $data);
    }

    function action(){
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);
        $table_columns = array("id_matkul","nama","semester");
        $column = 0;
        foreach($table_columns as $field)
        {
        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
        }

        $data_matkul = $this->m_matakuliah->tampil_matkulku();

        $excel_row = 2;

        foreach($data_matkul as $row)
        {
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id_matkul);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama_matkul);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->semester);
        $excel_row++;
        }
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2016');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Employee Data.xls"');
        $object_writer->save('php://output');
    }

    function depan(){
        $datamk = array(
            array(
                'id_matkul'=>'1',
                'nama_matkul'=>'APPL',
                'semester'=>'6'
            ),
            array(
                'id_matkul'=>'2',
                'nama_matkul'=>'PRPL',
                'semester'=>'4'
            ),
            array(
                'id_matkul'=>'3',
                'nama_matkul'=>'KWU',
                'semester'=>'4'
            )
            );
            foreach($datamk as $key =>$value){
                $qmk = $this->m_matakuliah->insert($value);
                if($qmk ==  TRUE){
                    echo "Matakuliah".$value['nama_matkul']."berhasil ditambah";
                }else{
                    echo "Matakuliah".$value['nama_matkul']."gagal ditambah";
                }
            }
    }








    function add(){
        $this->load->view("matakuliah/v_tambah_matkul");
    }

    function simpan_matakuliah(){
        $nama = $this->input->post('xnama');
        $semester = $this->input->post('xsemester');
        $this->m_matakuliah->simpanmatkul($nama, $semester);
        redirect('matakuliah');
    }

    function hapus_matkul($id_matkul){
        $this->m_matakuliah->hapusmatkul($id_matkul);
        redirect('matakuliah');
    }

    function edit_matkul($id_matkul){
        $data['editmk'] = $this->m_matakuliah->editmatkul($id_matkul);
        $this->load->view('matakuliah/v_edit_matkul', $data);
    }

    function update_matkul(){
        $id = $this->input->post('xid');
        $nama = $this->input->post('xnama');
        $semester = $this->input->post('xsemester');
        $this->m_matakuliah->updatematkul($id,$nama, $semester);
        redirect('matakuliah');

    }
    
}