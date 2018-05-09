<?php
namespace app\models;
use Yii;
use yii\base\Model;
class MyForm extends Model{
    public $input;
    public $input2;

    public function rules()
    {
        return [
            ['input', 'required'],
            ['input2','safe'],
        ];
    }

    public function get($num = 0){
      switch ($num) {
        case 0:
          return $this->input;
          break;
        case 1:
          return $this->input2;
        break;
      }
    }
}

?>
