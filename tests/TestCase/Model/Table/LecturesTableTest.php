<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LecturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LecturesTable Test Case
 */
class LecturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LecturesTable
     */
    public $Lectures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lectures',
        'app.courses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lectures') ? [] : ['className' => LecturesTable::class];
        $this->Lectures = TableRegistry::getTableLocator()->get('Lectures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lectures);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
