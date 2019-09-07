<?php


namespace App\Common;


class Code
{
    /**
     * 系统
     */
    const SYSTEM_OK            = 200;     //正确返回
    const AUTH_FAIL            = 403;     // 授权失败
    const AUTH_TOKEN_NULL      = 406;     // token 不存在
    const AUTH_TOKEN_NOT_MATCH = 407;     // token匹配失败
    const SYSTEM_ERROR         = 500;     //系统错误
    const SYSTEM_SAVE_ERROR    = 2007;    //保存失败
    const SYSTEM_UPDATE_ERROR  = 2008;    //更新失败
    const PARAM_INVALID        = 4001;    //请求参数缺失

    /**
     * 用户错误类
     */
    const USER_PHONE_EXIT         = 3001;     //手机号码已经注册
    const USER_NOT_EXIST          = 3002;     //用户不存在
    const USER_PASSWORD_ERROR     = 3003;     //密码不正确
    const USER_FORBID             = 3004;     //用户被禁用
    const USER_PROFILE_CHATTING   = 3005;     // 资料审核中
    const USER_PROFILE_SUCCESS    = 3006;     // 资料审核成功
    const USER_PROFILE_FAIL       = 3007;     // 资料审核失败
    const USER_NOT_REALAUTH       = 3008;     //用户未实名认证
    const USER_NOT_ADDRESS        = 3009;     // 不存在该地址
    const USER_CAPTIAL_NOT_ENOUGH = 3010;     //用户钱包不足
    const USER_SHARE_NOT_EXIT     = 3011;     // 分享的用不存在
    const USER_REALAUTH_REPEAT    = 3012;     //用户已经实名认证
    const USER_SIGNED             = 3013;   // 用户当日已经签到
    const USER_PROFILE_NOT_EXIT   = 3014;     // 资料不存在
    const USER_IDCARD_REPAT       = 3015;     // 用户身份证资料重复
    const USER_TOKEN_ERR          = 3016;     // 用户身份证资料重复


    /**
     * 手机类
     */
    const PME_WRONG_PHONE_FORMAT = 2001; // 手机格式错误


    /**
     * 短信错误类
     */
    const SMS_TYPE_ERR              = 4002; //短信类型错误
    const SMS_NUM_ERR               = 4003; //短信类型错误
    const SMS_NUM_EXPIRE            = 4004; //验证码已经过期(或者被使用)
    const SMS_MAX_LIMIT             = 4005; //短信单日最多次数
    const SMS_COND_EMPTY            = 4006; //短信验证码为空
    const SMS_BIND_PHONE_ERR        = 4007; //接受的短信和绑定的不一样
    const SMS_NOT_SUPPORT_NULL_USER = 4008; //短信不支持未注册的用户


    /**
     * 密码错误类
     */
    const REG_CONFIRM_PASSWD  = 4101; // 确认密码与输入密码不等
    const PME_PASSWD_UN_RULES = 4102; // 密码规则错误
    const PAY_PASSWD_ERR      = 4103; // 支付密码错误

    /**
     * 交易大厅
     */
    const TRADE_FLOOR_CLOSE         = 5001; // 交易大厅关闭
    const TRADE_ORDER_NUM_LIMIT     = 5002; // 交易数量限制
    const TARDE_ORDER_ING           = 5003; // 有进行中的交易
    const TRADE_INGORDER_FAIL       = 5004; // 此订单正在交易中
    const TRADE_NULL_ORDER          = 5005; // 不存在的交易
    const TRADE_PARNET_ERR          = 5006; // 交易双方不能为一个人
    const TRADE_CAN_SALE_NULL       = 5007; // 可售余额不足
    const TRADE_CAN_SALE_LIMIT_NULL = 5008; // 可售额度不足
    const TRADE_NOT_SUPPORT         = 5009; // 不支持的业务
    const TRADE_POWER_LIMIT         = 5010; // 交易能量不足
    const TRADE_ORDER_LIMIT         = 5011; // 交易能量不足


    /**
     * 证件类
     */
    const IDCARD_FORMAT_ERR     = 6001; // 身份证格式错误
    const BANKIDCARD_FORMAT_ERR = 6002; // 银行卡格式错误
    const BANK_MATCH_ERR        = 6003; // 银行匹配错误

    /**
     * 订单类
     */
    const ORDER_NULL_ERR          = 7001; // 订单不存在
    const ORDER_PUBING_ORDER      = 7002; // 发布中的订单不可库款
    const ORDER_INFO_MOT_MATCH    = 7003; // 订单信息不匹配
    const ORDER_CONFIRM_AUTH_FAIL = 7004; // 交易者不可以确认订单
    const BUYER_NOT_CONFIRME      = 7005; // 买家为提交支付凭证
    const BUYER_ALEADY_FINISH     = 7006; // 订单已经完成
    const ORDER_STATUS_ERR        = 7007; // 订单状态异常
    const ORDER_STATUS_TRING      = 7008; // 请先完成正在交易的订单

    /**
     * 鸡
     *
     * @var array
     */
    const CHOOK_EMPTY        = 8001; // 当前等级的鸡没有
    const CHOOK_PRE_TIME_ERR = 8002; // 预约时间不对
    const CHOOK_PRE_REPEAT   = 8003; // 重复预约
    const CHOOK_LEVEL_ERR    = 8004; // 预约的鸡的等级不存在
    const CHOOK_BOUGHT_OT    = 8005; // 鸡已经被买家买走了
    const CHOOK_BUY_TIME_ERR = 8006; // 鸡已经被买家买走了
    const CHOOK_LEVEL_EMPTY  = 8007; // 鸡已经被买家买走了
    const CHOOK_PRE_ERR      = 8008; // 预约失败请重试


    const GOODS_NOT_EXIT = 9001; // 商品不存在
    const GOODS_SKU_NULL = 9002; // 商品规格错误


    // 系统交易类型
    public static $tradeTypes = [
        1 => 'bean', // 金豆
        2 => 'chook',// 金鸡
    ];

    /**
     * Des:
     * Date: 2019-08-01  13:46
     *
     * @param $code
     *
     * @return string
     */
    static function msg($code)
    {
        $msg = CodeMsg::$code;
        if (empty(CodeMsg::$code)) {
            return "";
        }
        return $msg[$code];
    }
}