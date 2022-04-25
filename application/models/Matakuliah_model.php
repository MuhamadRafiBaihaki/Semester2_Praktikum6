<?php
class Matakuliah_model extends CI_Model {
    public $matakuliah;
    public $sks;
    public $kode;

}

class DosenMatakuliah extends Matakuliah_model {
    public $semester;
    public $hari;
    public $ruangan;
}