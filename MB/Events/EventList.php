<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 9:07
 */

namespace MB\Events;


interface EventList {
    const CLEAR_JOURNAL = "glor.clear_journal";
    const ADD_JOURNAL = "glor.add_to_journal";
    const ADD_JOURNAL_ALL = "glor.add_journal_all";
    const ON_MOVE = "glor.on_move";
} 