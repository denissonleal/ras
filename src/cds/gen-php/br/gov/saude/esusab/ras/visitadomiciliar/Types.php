<?php
namespace br\gov\saude\esusab\ras\visitadomiciliar;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
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

class FichaVisitaDomiciliarChildThrift {
  static $_TSPEC;

  /**
   * @var int
   */
  public $turno = null;
  /**
   * @var string
   */
  public $numProntuario = null;
  /**
   * @var string
   */
  public $cnsCidadao = null;
  /**
   * @var int
   */
  public $dtNascimento = null;
  /**
   * @var int
   */
  public $sexo = null;
  /**
   * @var bool
   */
  public $statusVisitaCompartilhadaOutroProfissional = null;
  /**
   * @var int[]
   */
  public $motivosVisita = null;
  /**
   * @var int
   */
  public $desfecho = null;
  /**
   * @var string
   */
  public $microArea = null;
  /**
   * @var bool
   */
  public $stForaArea = null;
  /**
   * @var int
   */
  public $tipoDeImovel = null;
  /**
   * @var double
   */
  public $pesoAcompanhamentoNutricional = null;
  /**
   * @var double
   */
  public $alturaAcompanhamentoNutricional = null;
  /**
   * @var string
   */
  public $cpfCidadao = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'turno',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'numProntuario',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'cnsCidadao',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'dtNascimento',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'sexo',
          'type' => TType::I64,
          ),
        6 => array(
          'var' => 'statusVisitaCompartilhadaOutroProfissional',
          'type' => TType::BOOL,
          ),
        7 => array(
          'var' => 'motivosVisita',
          'type' => TType::LST,
          'etype' => TType::I64,
          'elem' => array(
            'type' => TType::I64,
            ),
          ),
        8 => array(
          'var' => 'desfecho',
          'type' => TType::I64,
          ),
        9 => array(
          'var' => 'microArea',
          'type' => TType::STRING,
          ),
        10 => array(
          'var' => 'stForaArea',
          'type' => TType::BOOL,
          ),
        11 => array(
          'var' => 'tipoDeImovel',
          'type' => TType::I64,
          ),
        12 => array(
          'var' => 'pesoAcompanhamentoNutricional',
          'type' => TType::DOUBLE,
          ),
        13 => array(
          'var' => 'alturaAcompanhamentoNutricional',
          'type' => TType::DOUBLE,
          ),
        14 => array(
          'var' => 'cpfCidadao',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['turno'])) {
        $this->turno = $vals['turno'];
      }
      if (isset($vals['numProntuario'])) {
        $this->numProntuario = $vals['numProntuario'];
      }
      if (isset($vals['cnsCidadao'])) {
        $this->cnsCidadao = $vals['cnsCidadao'];
      }
      if (isset($vals['dtNascimento'])) {
        $this->dtNascimento = $vals['dtNascimento'];
      }
      if (isset($vals['sexo'])) {
        $this->sexo = $vals['sexo'];
      }
      if (isset($vals['statusVisitaCompartilhadaOutroProfissional'])) {
        $this->statusVisitaCompartilhadaOutroProfissional = $vals['statusVisitaCompartilhadaOutroProfissional'];
      }
      if (isset($vals['motivosVisita'])) {
        $this->motivosVisita = $vals['motivosVisita'];
      }
      if (isset($vals['desfecho'])) {
        $this->desfecho = $vals['desfecho'];
      }
      if (isset($vals['microArea'])) {
        $this->microArea = $vals['microArea'];
      }
      if (isset($vals['stForaArea'])) {
        $this->stForaArea = $vals['stForaArea'];
      }
      if (isset($vals['tipoDeImovel'])) {
        $this->tipoDeImovel = $vals['tipoDeImovel'];
      }
      if (isset($vals['pesoAcompanhamentoNutricional'])) {
        $this->pesoAcompanhamentoNutricional = $vals['pesoAcompanhamentoNutricional'];
      }
      if (isset($vals['alturaAcompanhamentoNutricional'])) {
        $this->alturaAcompanhamentoNutricional = $vals['alturaAcompanhamentoNutricional'];
      }
      if (isset($vals['cpfCidadao'])) {
        $this->cpfCidadao = $vals['cpfCidadao'];
      }
    }
  }

  public function getName() {
    return 'FichaVisitaDomiciliarChildThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->turno);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->numProntuario);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cnsCidadao);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->dtNascimento);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->sexo);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->statusVisitaCompartilhadaOutroProfissional);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::LST) {
            $this->motivosVisita = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readI64($elem5);
              $this->motivosVisita []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->desfecho);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->microArea);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->stForaArea);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->tipoDeImovel);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->pesoAcompanhamentoNutricional);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->alturaAcompanhamentoNutricional);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cpfCidadao);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FichaVisitaDomiciliarChildThrift');
    if ($this->turno !== null) {
      $xfer += $output->writeFieldBegin('turno', TType::I64, 1);
      $xfer += $output->writeI64($this->turno);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->numProntuario !== null) {
      $xfer += $output->writeFieldBegin('numProntuario', TType::STRING, 2);
      $xfer += $output->writeString($this->numProntuario);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cnsCidadao !== null) {
      $xfer += $output->writeFieldBegin('cnsCidadao', TType::STRING, 3);
      $xfer += $output->writeString($this->cnsCidadao);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dtNascimento !== null) {
      $xfer += $output->writeFieldBegin('dtNascimento', TType::I64, 4);
      $xfer += $output->writeI64($this->dtNascimento);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sexo !== null) {
      $xfer += $output->writeFieldBegin('sexo', TType::I64, 5);
      $xfer += $output->writeI64($this->sexo);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->statusVisitaCompartilhadaOutroProfissional !== null) {
      $xfer += $output->writeFieldBegin('statusVisitaCompartilhadaOutroProfissional', TType::BOOL, 6);
      $xfer += $output->writeBool($this->statusVisitaCompartilhadaOutroProfissional);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->motivosVisita !== null) {
      if (!is_array($this->motivosVisita)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('motivosVisita', TType::LST, 7);
      {
        $output->writeListBegin(TType::I64, count($this->motivosVisita));
        {
          foreach ($this->motivosVisita as $iter6)
          {
            $xfer += $output->writeI64($iter6);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->desfecho !== null) {
      $xfer += $output->writeFieldBegin('desfecho', TType::I64, 8);
      $xfer += $output->writeI64($this->desfecho);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->microArea !== null) {
      $xfer += $output->writeFieldBegin('microArea', TType::STRING, 9);
      $xfer += $output->writeString($this->microArea);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stForaArea !== null) {
      $xfer += $output->writeFieldBegin('stForaArea', TType::BOOL, 10);
      $xfer += $output->writeBool($this->stForaArea);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tipoDeImovel !== null) {
      $xfer += $output->writeFieldBegin('tipoDeImovel', TType::I64, 11);
      $xfer += $output->writeI64($this->tipoDeImovel);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->pesoAcompanhamentoNutricional !== null) {
      $xfer += $output->writeFieldBegin('pesoAcompanhamentoNutricional', TType::DOUBLE, 12);
      $xfer += $output->writeDouble($this->pesoAcompanhamentoNutricional);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->alturaAcompanhamentoNutricional !== null) {
      $xfer += $output->writeFieldBegin('alturaAcompanhamentoNutricional', TType::DOUBLE, 13);
      $xfer += $output->writeDouble($this->alturaAcompanhamentoNutricional);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cpfCidadao !== null) {
      $xfer += $output->writeFieldBegin('cpfCidadao', TType::STRING, 14);
      $xfer += $output->writeString($this->cpfCidadao);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class FichaVisitaDomiciliarMasterThrift {
  static $_TSPEC;

  /**
   * @var string
   */
  public $uuidFicha = null;
  /**
   * @var int
   */
  public $tpCdsOrigem = null;
  /**
   * @var \br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift
   */
  public $headerTransport = null;
  /**
   * @var \br\gov\saude\esusab\ras\visitadomiciliar\FichaVisitaDomiciliarChildThrift[]
   */
  public $visitasDomiciliares = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'uuidFicha',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'tpCdsOrigem',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'headerTransport',
          'type' => TType::STRUCT,
          'class' => '\br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift',
          ),
        4 => array(
          'var' => 'visitasDomiciliares',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\br\gov\saude\esusab\ras\visitadomiciliar\FichaVisitaDomiciliarChildThrift',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['uuidFicha'])) {
        $this->uuidFicha = $vals['uuidFicha'];
      }
      if (isset($vals['tpCdsOrigem'])) {
        $this->tpCdsOrigem = $vals['tpCdsOrigem'];
      }
      if (isset($vals['headerTransport'])) {
        $this->headerTransport = $vals['headerTransport'];
      }
      if (isset($vals['visitasDomiciliares'])) {
        $this->visitasDomiciliares = $vals['visitasDomiciliares'];
      }
    }
  }

  public function getName() {
    return 'FichaVisitaDomiciliarMasterThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->uuidFicha);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->tpCdsOrigem);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRUCT) {
            $this->headerTransport = new \br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift();
            $xfer += $this->headerTransport->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::LST) {
            $this->visitasDomiciliares = array();
            $_size7 = 0;
            $_etype10 = 0;
            $xfer += $input->readListBegin($_etype10, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $elem12 = null;
              $elem12 = new \br\gov\saude\esusab\ras\visitadomiciliar\FichaVisitaDomiciliarChildThrift();
              $xfer += $elem12->read($input);
              $this->visitasDomiciliares []= $elem12;
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FichaVisitaDomiciliarMasterThrift');
    if ($this->uuidFicha !== null) {
      $xfer += $output->writeFieldBegin('uuidFicha', TType::STRING, 1);
      $xfer += $output->writeString($this->uuidFicha);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tpCdsOrigem !== null) {
      $xfer += $output->writeFieldBegin('tpCdsOrigem', TType::I32, 2);
      $xfer += $output->writeI32($this->tpCdsOrigem);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->headerTransport !== null) {
      if (!is_object($this->headerTransport)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('headerTransport', TType::STRUCT, 3);
      $xfer += $this->headerTransport->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->visitasDomiciliares !== null) {
      if (!is_array($this->visitasDomiciliares)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('visitasDomiciliares', TType::LST, 4);
      {
        $output->writeListBegin(TType::STRUCT, count($this->visitasDomiciliares));
        {
          foreach ($this->visitasDomiciliares as $iter13)
          {
            $xfer += $iter13->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }
}
