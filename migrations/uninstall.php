<?php
use yii\db\Migration;
class uninstall extends Migratio
n
{
    public function up()
    {
        $this->dropTable('onlyoffice_share');
        $this->dropColumn('file', 'onlyoffice_key');
    }
    public function down()
    {
        echo "uninstall does not support migration down.\n";
        return false;
    }
}