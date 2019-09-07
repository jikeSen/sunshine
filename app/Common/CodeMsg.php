<?php


namespace App\Common;


class CodeMsg
{
    public static $code = [
        Code::SYSTEM_OK           => '操作成功',
        Code::SYSTEM_ERROR        => '系统错误',
        Code::SYSTEM_SAVE_ERROR   => 'DB保存错误',
        Code::SYSTEM_UPDATE_ERROR => 'DB更新错误',

        Code::PARAM_INVALID             => "参数为必填项",

        // 短信
        Code::SMS_MAX_LIMIT             => '当日短信次数用完',
        Code::SMS_TYPE_ERR              => '短信类型错误',
        Code::SMS_NUM_ERR               => '短信验证码错误',
        Code::SMS_NUM_EXPIRE            => '验证码已经失效或已被使用',
        Code::SMS_COND_EMPTY            => '短信验证码或ID为空',
        Code::SMS_BIND_PHONE_ERR        => '接受短信与绑定的短信不一致',
        Code::SMS_NOT_SUPPORT_NULL_USER => '该类业务不支持非注册用户，请先注册',

        // 用户
        Code::USER_PHONE_EXIT           => '该号码已经注册',
        Code::USER_PASSWORD_ERROR       => '用户密码不正确',
        Code::USER_NOT_EXIST            => '用不不存在，请检查账号',
        Code::USER_FORBID               => '用户被禁用',
        Code::USER_PROFILE_CHATTING     => '资料审核中，请勿重复提交',
        Code::USER_PROFILE_SUCCESS      => '审核成功',
        Code::USER_PROFILE_FAIL         => '审核不通过',
        Code::USER_NOT_REALAUTH         => '用户还未实名认证',
        Code::USER_NOT_ADDRESS          => '地址不存在',
        Code::USER_SHARE_NOT_EXIT       => '分享得用户不存在',
        Code::USER_REALAUTH_REPEAT      => '用户已经实名认证',
        Code::USER_SIGNED               => '您已签到',
        Code::USER_PROFILE_NOT_EXIT     => '资料不存在',
        Code::USER_IDCARD_REPAT         => '当前身份证已经实名',
        Code::USER_TOKEN_ERR            => '用户token错误或失效',

        // 密码
        Code::REG_CONFIRM_PASSWD        => '两次密码不一致',
        Code::PME_PASSWD_UN_RULES       => '密码为字母开头的8-12位的字母数字字符串',
        Code::PAY_PASSWD_ERR            => '支付密码错误',

        //手机
        Code::PME_WRONG_PHONE_FORMAT    => '手机号码格式有误',

        // 交易
        Code::TRADE_FLOOR_CLOSE         => '交易大厅开放时间为9:00~22:00',
        Code::TRADE_ORDER_NUM_LIMIT     => '当日交易量最大为%s单',
        Code::TARDE_ORDER_ING           => '您还有交易正在进行，暂时不能发单',
        Code::TRADE_INGORDER_FAIL       => '此订单正在交易中',
        Code::TRADE_NULL_ORDER          => '不存在的交易订单',
        Code::TRADE_PARNET_ERR          => '交易双方不能为同一个用户',
        Code::TRADE_CAN_SALE_NULL       => '可售余额不足',
        Code::TRADE_CAN_SALE_LIMIT_NULL => '可售额度不足',
        Code::TRADE_NOT_SUPPORT         => '不支持的业务',
        Code::TRADE_POWER_LIMIT         => '交易能量余额不足',

        Code::IDCARD_FORMAT_ERR       => '身份证卡号格式错误',
        Code::BANKIDCARD_FORMAT_ERR   => '银行卡号格式错误',
        Code::BANK_MATCH_ERR          => '系统检测到银行为%s请确认',

        // 订单
        Code::ORDER_NULL_ERR          => '订单不存在',
        Code::ORDER_PUBING_ORDER      => '订单发布中，状态不可用',
        Code::ORDER_INFO_MOT_MATCH    => '订单信息不匹配', // 生成订单的用户的操作的用户
        Code::ORDER_CONFIRM_AUTH_FAIL => '交易者不可以确认订单',
        Code::BUYER_NOT_CONFIRME      => '买家未提交支付凭证，不可以确认',
        Code::BUYER_ALEADY_FINISH     => '订单已经完成',
        Code::ORDER_STATUS_ERR        => '订单状态异常',
        Code::ORDER_STATUS_TRING      => '请先完成交易中的订单',

        /**
         * 金鸡
         */
        Code::CHOOK_PRE_TIME_ERR      => '预约时间错误',
        Code::CHOOK_BUY_TIME_ERR      => '抢购时间错误',
        Code::CHOOK_PRE_REPEAT        => '重复预约',
        Code::CHOOK_EMPTY             => '鸡在繁殖中',
        Code::CHOOK_BOUGHT_OT         => '鸡已经别人领走了',
        Code::CHOOK_LEVEL_EMPTY       => '鸡的等级为空',
        Code::CHOOK_PRE_ERR           => '预约失败，请重试',

        Code::GOODS_NOT_EXIT => '商品不存在',
        Code::GOODS_SKU_NULL => '商品规格错误',
    ];
}

