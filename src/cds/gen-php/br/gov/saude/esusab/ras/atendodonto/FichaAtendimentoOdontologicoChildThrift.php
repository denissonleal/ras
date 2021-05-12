<?php
namespace br\gov\saude\esusab\ras\atendodonto;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class FichaAtendimentoOdontologicoChildThrift
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'dtNascimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'cnsCidadao',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'numProntuario',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'gestante',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        5 => array(
            'var' => 'necessidadesEspeciais',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        6 => array(
            'var' => 'localAtendimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        7 => array(
            'var' => 'tipoAtendimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        8 => array(
            'var' => 'tiposEncamOdonto',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        9 => array(
            'var' => 'tiposFornecimOdonto',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        10 => array(
            'var' => 'tiposVigilanciaSaudeBucal',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        11 => array(
            'var' => 'tiposConsultaOdonto',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        12 => array(
            'var' => 'procedimentosRealizados',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\br\gov\saude\esusab\ras\atendodonto\ProcedimentoQuantidadeThrift',
                ),
        ),
        14 => array(
            'var' => 'sexo',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        15 => array(
            'var' => 'turno',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        16 => array(
            'var' => 'dataHoraInicialAtendimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        17 => array(
            'var' => 'dataHoraFinalAtendimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        18 => array(
            'var' => 'cpfCidadao',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        19 => array(
            'var' => 'medicamentos',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\br\gov\saude\esusab\ras\common\MedicamentoThrift',
                ),
        ),
        20 => array(
            'var' => 'encaminhamentos',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\br\gov\saude\esusab\ras\common\EncaminhamentoExternoThrift',
                ),
        ),
    );

    /**
     * @var int
     */
    public $dtNascimento = null;
    /**
     * @var string
     */
    public $cnsCidadao = null;
    /**
     * @var string
     */
    public $numProntuario = null;
    /**
     * @var bool
     */
    public $gestante = null;
    /**
     * @var bool
     */
    public $necessidadesEspeciais = null;
    /**
     * @var int
     */
    public $localAtendimento = null;
    /**
     * @var int
     */
    public $tipoAtendimento = null;
    /**
     * @var int[]
     */
    public $tiposEncamOdonto = null;
    /**
     * @var int[]
     */
    public $tiposFornecimOdonto = null;
    /**
     * @var int[]
     */
    public $tiposVigilanciaSaudeBucal = null;
    /**
     * @var int[]
     */
    public $tiposConsultaOdonto = null;
    /**
     * @var \br\gov\saude\esusab\ras\atendodonto\ProcedimentoQuantidadeThrift[]
     */
    public $procedimentosRealizados = null;
    /**
     * @var int
     */
    public $sexo = null;
    /**
     * @var int
     */
    public $turno = null;
    /**
     * @var int
     */
    public $dataHoraInicialAtendimento = null;
    /**
     * @var int
     */
    public $dataHoraFinalAtendimento = null;
    /**
     * @var string
     */
    public $cpfCidadao = null;
    /**
     * @var \br\gov\saude\esusab\ras\common\MedicamentoThrift[]
     */
    public $medicamentos = null;
    /**
     * @var \br\gov\saude\esusab\ras\common\EncaminhamentoExternoThrift[]
     */
    public $encaminhamentos = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['dtNascimento'])) {
                $this->dtNascimento = $vals['dtNascimento'];
            }
            if (isset($vals['cnsCidadao'])) {
                $this->cnsCidadao = $vals['cnsCidadao'];
            }
            if (isset($vals['numProntuario'])) {
                $this->numProntuario = $vals['numProntuario'];
            }
            if (isset($vals['gestante'])) {
                $this->gestante = $vals['gestante'];
            }
            if (isset($vals['necessidadesEspeciais'])) {
                $this->necessidadesEspeciais = $vals['necessidadesEspeciais'];
            }
            if (isset($vals['localAtendimento'])) {
                $this->localAtendimento = $vals['localAtendimento'];
            }
            if (isset($vals['tipoAtendimento'])) {
                $this->tipoAtendimento = $vals['tipoAtendimento'];
            }
            if (isset($vals['tiposEncamOdonto'])) {
                $this->tiposEncamOdonto = $vals['tiposEncamOdonto'];
            }
            if (isset($vals['tiposFornecimOdonto'])) {
                $this->tiposFornecimOdonto = $vals['tiposFornecimOdonto'];
            }
            if (isset($vals['tiposVigilanciaSaudeBucal'])) {
                $this->tiposVigilanciaSaudeBucal = $vals['tiposVigilanciaSaudeBucal'];
            }
            if (isset($vals['tiposConsultaOdonto'])) {
                $this->tiposConsultaOdonto = $vals['tiposConsultaOdonto'];
            }
            if (isset($vals['procedimentosRealizados'])) {
                $this->procedimentosRealizados = $vals['procedimentosRealizados'];
            }
            if (isset($vals['sexo'])) {
                $this->sexo = $vals['sexo'];
            }
            if (isset($vals['turno'])) {
                $this->turno = $vals['turno'];
            }
            if (isset($vals['dataHoraInicialAtendimento'])) {
                $this->dataHoraInicialAtendimento = $vals['dataHoraInicialAtendimento'];
            }
            if (isset($vals['dataHoraFinalAtendimento'])) {
                $this->dataHoraFinalAtendimento = $vals['dataHoraFinalAtendimento'];
            }
            if (isset($vals['cpfCidadao'])) {
                $this->cpfCidadao = $vals['cpfCidadao'];
            }
            if (isset($vals['medicamentos'])) {
                $this->medicamentos = $vals['medicamentos'];
            }
            if (isset($vals['encaminhamentos'])) {
                $this->encaminhamentos = $vals['encaminhamentos'];
            }
        }
    }

    public function getName()
    {
        return 'FichaAtendimentoOdontologicoChildThrift';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->dtNascimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->cnsCidadao);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->numProntuario);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->gestante);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->necessidadesEspeciais);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->localAtendimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->tipoAtendimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::LST) {
                        $this->tiposEncamOdonto = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $xfer += $input->readI64($elem5);
                            $this->tiposEncamOdonto []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::LST) {
                        $this->tiposFornecimOdonto = array();
                        $_size6 = 0;
                        $_etype9 = 0;
                        $xfer += $input->readListBegin($_etype9, $_size6);
                        for ($_i10 = 0; $_i10 < $_size6; ++$_i10) {
                            $elem11 = null;
                            $xfer += $input->readI64($elem11);
                            $this->tiposFornecimOdonto []= $elem11;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::LST) {
                        $this->tiposVigilanciaSaudeBucal = array();
                        $_size12 = 0;
                        $_etype15 = 0;
                        $xfer += $input->readListBegin($_etype15, $_size12);
                        for ($_i16 = 0; $_i16 < $_size12; ++$_i16) {
                            $elem17 = null;
                            $xfer += $input->readI64($elem17);
                            $this->tiposVigilanciaSaudeBucal []= $elem17;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::LST) {
                        $this->tiposConsultaOdonto = array();
                        $_size18 = 0;
                        $_etype21 = 0;
                        $xfer += $input->readListBegin($_etype21, $_size18);
                        for ($_i22 = 0; $_i22 < $_size18; ++$_i22) {
                            $elem23 = null;
                            $xfer += $input->readI64($elem23);
                            $this->tiposConsultaOdonto []= $elem23;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::LST) {
                        $this->procedimentosRealizados = array();
                        $_size24 = 0;
                        $_etype27 = 0;
                        $xfer += $input->readListBegin($_etype27, $_size24);
                        for ($_i28 = 0; $_i28 < $_size24; ++$_i28) {
                            $elem29 = null;
                            $elem29 = new \br\gov\saude\esusab\ras\atendodonto\ProcedimentoQuantidadeThrift();
                            $xfer += $elem29->read($input);
                            $this->procedimentosRealizados []= $elem29;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 14:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->sexo);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 15:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->turno);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 16:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->dataHoraInicialAtendimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 17:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->dataHoraFinalAtendimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 18:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->cpfCidadao);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 19:
                    if ($ftype == TType::LST) {
                        $this->medicamentos = array();
                        $_size30 = 0;
                        $_etype33 = 0;
                        $xfer += $input->readListBegin($_etype33, $_size30);
                        for ($_i34 = 0; $_i34 < $_size30; ++$_i34) {
                            $elem35 = null;
                            $elem35 = new \br\gov\saude\esusab\ras\common\MedicamentoThrift();
                            $xfer += $elem35->read($input);
                            $this->medicamentos []= $elem35;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 20:
                    if ($ftype == TType::LST) {
                        $this->encaminhamentos = array();
                        $_size36 = 0;
                        $_etype39 = 0;
                        $xfer += $input->readListBegin($_etype39, $_size36);
                        for ($_i40 = 0; $_i40 < $_size36; ++$_i40) {
                            $elem41 = null;
                            $elem41 = new \br\gov\saude\esusab\ras\common\EncaminhamentoExternoThrift();
                            $xfer += $elem41->read($input);
                            $this->encaminhamentos []= $elem41;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('FichaAtendimentoOdontologicoChildThrift');
        if ($this->dtNascimento !== null) {
            $xfer += $output->writeFieldBegin('dtNascimento', TType::I64, 1);
            $xfer += $output->writeI64($this->dtNascimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cnsCidadao !== null) {
            $xfer += $output->writeFieldBegin('cnsCidadao', TType::STRING, 2);
            $xfer += $output->writeString($this->cnsCidadao);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->numProntuario !== null) {
            $xfer += $output->writeFieldBegin('numProntuario', TType::STRING, 3);
            $xfer += $output->writeString($this->numProntuario);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->gestante !== null) {
            $xfer += $output->writeFieldBegin('gestante', TType::BOOL, 4);
            $xfer += $output->writeBool($this->gestante);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->necessidadesEspeciais !== null) {
            $xfer += $output->writeFieldBegin('necessidadesEspeciais', TType::BOOL, 5);
            $xfer += $output->writeBool($this->necessidadesEspeciais);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->localAtendimento !== null) {
            $xfer += $output->writeFieldBegin('localAtendimento', TType::I64, 6);
            $xfer += $output->writeI64($this->localAtendimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tipoAtendimento !== null) {
            $xfer += $output->writeFieldBegin('tipoAtendimento', TType::I64, 7);
            $xfer += $output->writeI64($this->tipoAtendimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tiposEncamOdonto !== null) {
            if (!is_array($this->tiposEncamOdonto)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tiposEncamOdonto', TType::LST, 8);
            $output->writeListBegin(TType::I64, count($this->tiposEncamOdonto));
            foreach ($this->tiposEncamOdonto as $iter42) {
                $xfer += $output->writeI64($iter42);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tiposFornecimOdonto !== null) {
            if (!is_array($this->tiposFornecimOdonto)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tiposFornecimOdonto', TType::LST, 9);
            $output->writeListBegin(TType::I64, count($this->tiposFornecimOdonto));
            foreach ($this->tiposFornecimOdonto as $iter43) {
                $xfer += $output->writeI64($iter43);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tiposVigilanciaSaudeBucal !== null) {
            if (!is_array($this->tiposVigilanciaSaudeBucal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tiposVigilanciaSaudeBucal', TType::LST, 10);
            $output->writeListBegin(TType::I64, count($this->tiposVigilanciaSaudeBucal));
            foreach ($this->tiposVigilanciaSaudeBucal as $iter44) {
                $xfer += $output->writeI64($iter44);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tiposConsultaOdonto !== null) {
            if (!is_array($this->tiposConsultaOdonto)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tiposConsultaOdonto', TType::LST, 11);
            $output->writeListBegin(TType::I64, count($this->tiposConsultaOdonto));
            foreach ($this->tiposConsultaOdonto as $iter45) {
                $xfer += $output->writeI64($iter45);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->procedimentosRealizados !== null) {
            if (!is_array($this->procedimentosRealizados)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('procedimentosRealizados', TType::LST, 12);
            $output->writeListBegin(TType::STRUCT, count($this->procedimentosRealizados));
            foreach ($this->procedimentosRealizados as $iter46) {
                $xfer += $iter46->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sexo !== null) {
            $xfer += $output->writeFieldBegin('sexo', TType::I64, 14);
            $xfer += $output->writeI64($this->sexo);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->turno !== null) {
            $xfer += $output->writeFieldBegin('turno', TType::I64, 15);
            $xfer += $output->writeI64($this->turno);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dataHoraInicialAtendimento !== null) {
            $xfer += $output->writeFieldBegin('dataHoraInicialAtendimento', TType::I64, 16);
            $xfer += $output->writeI64($this->dataHoraInicialAtendimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dataHoraFinalAtendimento !== null) {
            $xfer += $output->writeFieldBegin('dataHoraFinalAtendimento', TType::I64, 17);
            $xfer += $output->writeI64($this->dataHoraFinalAtendimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cpfCidadao !== null) {
            $xfer += $output->writeFieldBegin('cpfCidadao', TType::STRING, 18);
            $xfer += $output->writeString($this->cpfCidadao);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->medicamentos !== null) {
            if (!is_array($this->medicamentos)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('medicamentos', TType::LST, 19);
            $output->writeListBegin(TType::STRUCT, count($this->medicamentos));
            foreach ($this->medicamentos as $iter47) {
                $xfer += $iter47->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->encaminhamentos !== null) {
            if (!is_array($this->encaminhamentos)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('encaminhamentos', TType::LST, 20);
            $output->writeListBegin(TType::STRUCT, count($this->encaminhamentos));
            foreach ($this->encaminhamentos as $iter48) {
                $xfer += $iter48->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
