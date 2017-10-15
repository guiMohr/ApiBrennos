<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/09/17
 * Time: 20:13
 */

namespace Core\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author
 * @category Core
 * @package Entity
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 *
 */
class Usuario extends AbstractEntity
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type = "integer")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=false)
     * @var String
     */
    protected $nome;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var Datetime
     */
    protected $data_nascimento;

    /**
     * @ORM\Column(type="text")
     * @var String
     */
    protected $sexo;

    /**
     * @ORM\Column(type="string", length=20)
     * @var String
     */
    protected $cpf;

    /**
     * @ORM\Column(type="string", length=20)
     * @var String
     */
    protected $cargo;
}