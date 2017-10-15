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
 * @ORM\Table(name="local")
 *
 */
class Local extends AbstractEntity
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type = "integer")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @var String
     */
    protected $nome_fantasia;

    /**
     * @ORM\Column(type="string", length=30)
     * @var String
     */
    protected $razao_social;

    /**
     * @ORM\Column(type="string", length=12)
     * @var String
     */
    protected $inscricao_estadual;

    /**
     * @ORM\Column(type="string", length=20)
     * @var String
     */
    protected $cnpj;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var Datetime
     */
    protected $data_fundacao;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @var String
     */
    protected $foto_perfil;

}