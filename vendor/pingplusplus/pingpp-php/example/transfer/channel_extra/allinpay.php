<?php
return [
    // 必须，1~32位，收款人银行卡号或者存折号。
    'card_number' => '6228480402564890011',

    // 必须，1~100位，收款人姓名。
    'user_name' => '张三',

    // 必须，4位，开户银行编号，详情请参考 企业付款（银行卡）银行编号说明：https://www.pingxx.com/api#%E9%93%B6%E8%A1%8C%E7%BC%96%E5%8F%B7%E8%AF%B4%E6%98%8E。
    'open_bank_code' => '0103',

    // 可选，5位，业务代码，根据通联业务人员提供，不填使用通联提供默认值09900。
    // 'business_code' => '09900',

    // 可选，1位，银行卡号类型，0：银行卡、1：存折，不填默认使用银行卡。
    // 'card_type' => 0,
];