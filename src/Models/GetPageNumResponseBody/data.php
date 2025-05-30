<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetPageNumResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNum;
    protected $_name = [
        'pageNum' => 'PageNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        return $model;
    }
}
