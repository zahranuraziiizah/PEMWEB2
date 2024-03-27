<?php

class NilaiMahasiswa
{
    var $nama;
    var $matkul;
    var $uts;
    var $uas;
    var $tugas;
    var $nilai_total;
    var $status;
    var $grade;
    var $predikat;

    public function __construct($nama, $matkul, $uts, $uas, $tugas)
    {
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->uts = $uts;
        $this->uas = $uas;
        $this->tugas = $tugas;
        $this->hitungNilaiTotal();
        $this->tentukanStatus();
        $this->tentukanGrade();
        $this->tentukanPredikat();
    }

    public function hitungNilaiTotal()
    {
        $this->nilai_total = (30 / 100 * $this->uts) + (35 / 100 * $this->uas) + (35 / 100 * $this->tugas);
    }

    public function tentukanStatus()
    {
        $this->status = ($this->nilai_total > 55) ? "Lulus" : "Tidak Lulus";
    }

    public function tentukanGrade()
    {
        if ($this->nilai_total >= 85) {
            $this->grade = "A";
        } elseif ($this->nilai_total >= 70) {
            $this->grade = "B";
        } elseif ($this->nilai_total >= 56) {
            $this->grade = "C";
        } elseif ($this->nilai_total >= 36) {
            $this->grade = "D";
        } elseif ($this->nilai_total >= 0) {
            $this->grade = "E";
        } else {
            $this->grade = "I";
        }
    }

    public function tentukanPredikat()
    {
        switch ($this->grade) {
            case 'A':
                $this->predikat = "Sangat Memuaskan";
                break;
            case 'B':
                $this->predikat = "Memuaskan";
                break;
            case 'C':
                $this->predikat = "Cukup";
                break;
            case 'D':
                $this->predikat = "Kurang";
                break;
            case 'E':
                $this->predikat = "Sangat Kurang";
                break;
            default:
                $this->predikat = "Tidak Ada";
                break;
        }
    }
}

?>