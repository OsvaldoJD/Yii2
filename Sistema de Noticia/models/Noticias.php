<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $conteudo
 * @property string $data
 * @property string $imagem
 * @property string $categoria
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $file;
            
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'conteudo', 'data', 'imagem', 'categoria'], 'required'],
            [['conteudo'], 'string'],
            [['file'], 'file'],
            [['data'], 'safe'],
            [['titulo', 'imagem', 'categoria'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'conteudo' => 'Conteudo',
            'data' => 'Data',
            'imagem' => 'Imagem',
            'categoria' => 'Categoria',
            'file' => 'Imagem',
        ];
    }
}
