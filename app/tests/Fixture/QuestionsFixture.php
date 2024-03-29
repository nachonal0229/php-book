<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 *
 */
class QuestionsFixture extends TextFixture
{
    /**
     * テーブルのフィールド情報
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
     public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'uinsigned' => true,
                    'null' => false, 'default' => null, 'comment' => '',
                    'autoIncrement' => true, 'precision' => null
        ],
        'question_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true,
                    'null' => false, 'default' => null, 'comment' => '',
                    'precision' => null, 'autoIncrement' => null
        ],
        'user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true,
                    'null' => false, 'default' => null, 'comment' => '',
                    'precision' => null, 'autoIncrement' => null
        ],
        'body' => ['type' => 'string', 'length' => 255, 'null' => false,
                    'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '',
                    'precision' => null, 'fixed' => null
        ]

    ];
    // @codingStanderdsIgnoreEnd
}
