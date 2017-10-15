<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/10/17
 * Time: 17:08
 */

namespace Core\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author
 * @category Core
 * @package Entity
 * @ORM\Entity
 * @ORM\Table(name="foto")
 *
 */
class Foto extends AbstractEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type = "integer")
     * @var integer
     */
    protected $id;

//    /**
//     ** @ORM\ManyToOne(targetEntity="Evento")
//     * @ORM\JoinColumn(name="id_evento", referencedColumnName="id")
//     * @var integer
//     */
//    protected $id_evento;

    /**
     * @ORM\Column(type="string", length=150, nullable=false)
     * @var String
     */
    protected $nome;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var Datetime
     */
    protected $data;

}