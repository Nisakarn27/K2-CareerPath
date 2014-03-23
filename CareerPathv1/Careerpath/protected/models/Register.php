<?php

/**
 * This is the model class for table "register".
 *
 * The followings are the available columns in table 'register':
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $study_id
 * @property string $email
 * @property string $major
 * @property string $faculty
 * @property string $create_date
 * @property integer $user_id
 */
class Register extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'register';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, study_id, user_id', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('fname, lname, study_id, email, major, faculty, create_date', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, lname, study_id, email, major, faculty, create_date, user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'user'=>array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'ชื่อ',
			'lname' => 'นามสกุล',
			'study_id' => 'รหัสประจำตัวนักศึกษา',
			'email' => 'E-mail',
			'major' => 'สาขา',
			'faculty' => 'คณะ',
			'create_date' => 'สมัครเมื่อ',
			'user_id' => 'User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('study_id',$this->study_id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('faculty',$this->faculty,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Register the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
