<?php
namespace MB\Glor;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 23:31
     */
/**
 * @Entity
 * @Table(name="account")
 */
class User extends AbstractAutoIncrementObject
{
    /**
     * @var string
     * @Column(type="string", length=30)
     */
    protected $login;
    /**
     * @var string
     * @Column(type="string", length=30)
     */
    protected $email;
    /**
     * @var string
     * @Column(name="pass", type="string", length=64)
     */
    protected $password;
    /**
     * @var string
     * @Column(name="cookid", type="string", length=64, nullable=true)
     */
    protected $cookId;
    /**
     * @var \MB\Glor\Char\AbstractChar
     * @OneToOne(targetEntity="MB\Glor\Char\AbstractChar", cascade={"persist", "remove"})
     * @JoinColumn(name="char_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $char;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    /**
     * @return string
     */
    public function getCookId()
    {
        return $this->cookId;
    }

    /**
     * @param string $cookId
     */
    public function setCookId($cookId)
    {
        $this->cookId = $cookId;
    }

    /**
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getChar()
    {
        return $this->char;
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $char
     */
    public function setChar($char)
    {
        $this->char = $char;
    }
}
