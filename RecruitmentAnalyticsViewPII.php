<?php

class RecruitmentAnalyticsViewPII extends EMongoDocument
{
    public $id;
    public $candidate_name;
    public $email;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @inheritDoc
     */
    public function getCollectionName()
    {
        return 'dbCollection';
    }
}
