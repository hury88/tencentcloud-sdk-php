<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getCoverSet() 获取智能封面列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverSet(array $CoverSet) 设置智能封面列表。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *智能封面结果信息
 */
class AiAnalysisTaskCoverOutput extends AbstractModel
{
    /**
     * @var array 智能封面列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverSet;
    /**
     * @param array $CoverSet 智能封面列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CoverSet",$param) and $param["CoverSet"] !== null) {
            $this->CoverSet = [];
            foreach ($param["CoverSet"] as $key => $value){
                $obj = new MediaAiAnalysisCoverItem();
                $obj->deserialize($value);
                array_push($this->CoverSet, $obj);
            }
        }
    }
}
