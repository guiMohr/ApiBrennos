<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/09/17
 * Time: 20:06
 */

namespace Core\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author
 * @category Core
 * @package Entity
 * @ORM\Entity
 * @ORM\Table(name="evento")
 *
 */

class Evento extends AbstractEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type = "integer")
     * @var integer
     */
    protected $id;

    /**
     ** @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumn(name="id_local", referencedColumnName="id")
     *
     * @var integer
     */
    protected $id_local;

    /**
     * @ORM\Column(type="string", length=150, nullable=false)
     * @var String
     */
    protected $nome;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @var String
     */
    protected $foto_perfil;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @var String
     */
    protected $imagem_divulgacao;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var Datetime
     */
    protected $data;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var Datetime
     */
    protected $horario_inicial;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var Datetime
     */
    protected $horario_final;

    /**
     * @ORM\Column(type="string", length=500, nullable=false)
     * @var String
     */
    protected $comentario;

    /**
     * @ORM\Column(type="string", length=500, nullable=false)
     * @var String
     */
    protected $descricao;


}