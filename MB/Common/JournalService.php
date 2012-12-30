<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 20:17
 */
use MB\I\JournalInterface;
use MB\I\LocationInterface;
use MB\Glor\Char\AbstractChar;

interface JournalService
{
    const JOURNAL_PUBLIC = 1;
    const JOURNAL_PRIVATE = 2;

    /**
     * Получение игрового журнала для персонажа
     * Выдать сообщения, адресованные всем, и только ему
     * @abstract
     * @param \MB\I\LocationInterface $location
     * @param int $limit
     * @param int $offset
     * @internal param \MB\Glor\Char\AbstractChar $char
     * @internal param int $count_messages
     * @return array
     */
    public function getLocJournal(LocationInterface $location, $limit = 10, $offset = 0);

    /**
     * @param \MB\Glor\Char\AbstractChar $char
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getCharJournal(AbstractChar $char, $limit = 10, $offset = 0);
    /**
     * @abstract
     * @return void
     */
    public function clearJournal();

    /**
     * @abstract
     * @param \MB\I\JournalInterface $journal
     * @return void
     */
    public function add(JournalInterface $journal);

}
