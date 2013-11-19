<?php
/**
 * TAE SDK 内建开放接口
 * @author 桃谷
 */

//------------------------- php类 ---------

/**
 * 商品类
 */
class ItemDO
{
    /**
     * 商品ID
     */
    public $id = 1;
    /**
     * 价格
     */
    public $price = 12.10;
    /**
     * 商品标题
     */
    public $title = "商品标题";
    /**
     * 商品所属的卖家ID，long型
     */
    public $ownerId = 1;
    /**
     * 商品图片URL
     */
    public $picUrl = "http://www.taobao.com/xxx.gif";
    /**
     * 商品被收藏的次数
     */
    public $collectedCount = 2;
    /**
     * 累计销售数量
     */
    public $soldCount = 2;
    /**
     * 宝贝评论数，只对B2C商品有效
     */
    public $commentCount = 2;
    /**
     * 所属的店铺分类
     */
    public $shopCategoryId = array(1, 2);
	
	/**
	 * 折扣价格	
	 */
	public $discountPrice = 123.45;

    /**
     *  根据传递的图片象素获取图片，图片大小支持：
     *  SDK 1 支持的图片大小有： 40x40、60x60、80x80、100x100、120x120、160x160、220x220、310x310、620x10000
	 *  SDK 2新增的图片大小有: 130x130、180x180、200x200、230x230、240x240、250x250、430x430、460x460 
     * @param int $height 图片像素高，可以使整数类型,默认160
     * @param int $width  图片像素宽，可以使整数类型，默认160
     *  如果图片像素大小错误的话，函数返回""字符串。
     *
     */
    public function getPicUrl($height = 160, $width = 160)
    {
        return "";
    }

    /**
     *  根据传递的图片象素获取图片，图片大小支持：
     *  SDK 1 支持的图片大小有： 40x40、60x60、80x80、100x100、120x120、160x160、220x220、310x310、620x10000
	 *  SDK 2新增的图片大小有: 130x130、180x180、200x200、230x230、240x240、250x250、430x430、460x460 
     * @param height 图片像素高，可以使整数类型,默认160
     * @param width  图片像素宽，可以使整数类型，默认160
     *  如果图片像素大小错误的话，函数返回""字符串。
     */
    public function getPictureURL($height = 160, $width = 160)
    {
        return $this->getPicUrl($height, $width);
    }
}

/**
 * sku类
 */
class ItemSkuDO
{
    /**
     * sku的id键值
     */
    public $skuId = 1111;

    /**
     *   商品ID
     */
    public $itemId = 1;

    /**
     *   商品数量
     */
    public $quantity = 20;

    /**
     *   商品价格
     */
    public $price = 120.00;

    /**
     * sku属性列表
     */
    public $openItemSkuPropertiesDOList = Array(Array('2222','3335','1111','颜色分类','红色'),
                                                Array('2223','3354','1111','尺码','XL'));
    /**
     * 属性：颜色分类的图片URL
     */
    public $propertyImageUrl = "http://www.taobao.com/yyy.gif";
}

/**
 * itemSKuPropertyDO类
 */

class ItemSkuPropertiesDO
{
    /**
     * 属性ID
     */
    public $propertyId = 2222;
    /**
     * 属性值ID
     */
    public $valueId = 3335;
    /**
     * skuID,用来反向关联
     */
    public $skuId = 1111;
    /**
     * 属性文本名称
     */
    public $propertyText = "颜色分类";
    /**
     * 属性文本值
     */
    public $valueText ="红色";
}
/**
 * 店铺类
 */
class ShopDO
{
    /**
     * 店铺ID
     */
    public $id = 1;
    /**
     * 店铺标题
     */
    public $title = "店铺标题";
    /**
     * 店铺主营
     */
    public $mainBusiness = "店铺主营";
    /**
     * 开店时间
     */
    public $startTime = "2008-03-05";
    /**
     * 所属的卖家ID
     */
    public $ownerId = 1;
    /**
     * 所属的卖家Nick
     */
    public $ownerNick = "雷卷";
    /**
     * 店标URL
     */
    public $logoUrl = "http://logo.taobao.com/xxx.jpg";
    /**
     * 新版店铺LOGO
     */
    public $shopLogo = "http://log.taobao.com/xxx.jpg";
    /**
     * 宝贝数量
     */
    public $itemCount = 22;
    /**
     * 收藏人气：被收藏的次数
     */
    public $collectedCount = 100;
    /**
     * 店铺域名
     */
    public $domainName = "foobar.com";
    /**
     * 店铺介绍
     */
    public $introduction = "店铺介绍";
    /**
     * 店铺公告
     */
    public $bulettin = "店铺公告";
}

/**
 * 用户类
 */
class UserDO
{
    /**
     * 用户ID
     */
    public $id = 1;
    /**
     * 注册时间
     */
    public $registrationDate = "2008-03-05";
    /**
     * Nick
     */
    public $nick = "雷卷";
    /**
     * 国家
     */
    public $country = "中国";
    /**
     * 省
     */
    public $province = "浙江";
    /**
     * 城市
     */
    public $city = "杭州";
    /**
     * 信用
     */
    public $credit = 2222;
    /**
     * 好评率
     */
    public $goodRate = 1234;
}

/**
 * 友情链接对象
 */
class FriendLinkDO
{
    /**
     * ID
     */
    public $id = 11;
    /**
     * 所属的卖家ID
     */
    public $userId = 1;
    /**
     * 链接名称
     */
    public $title = "链接名称";
    /**
     * 链接地址
     */
    public $url = "http://www.taobao.com/xxx";
}

/**
 * 链接类
 */
class LinkDO
{
    /**
     * 链接地址
     */
    public $text = "链接名称";
    /**
     * 链接地址
     */
    public $href = "http://www.taobao.com/xxx";
    /**
     * target，2表示新窗口
     */
    public $target = 1;
    /**
     * 高亮标识
     */
    public $highLight = true;
}

/**
 * 店铺类目类
 */
class ShopCategoryDO
{
    /**
     * ID
     */
    public $id = 122;
    /**
     * 类目名称
     */
    public $name = "类目名称";
    /**
     * 类目图标
     */
    public $iconUrl = "类目图标URL";
    /**
     * 父类目ID
     */
    public $parentId = 100;
    /**
     * 所属的店铺ID
     */
    public $shopId = 1;
}

/**
 * 评价类
 */
class RateDO
{
    /**
     * 宝贝数字id
     */
	public $auctionId = 123456;

    /**
     * 评价者昵称
     */
	public $raterNick = "评价者昵称";
	
    /**
     * 评价内容，存文字，不包括图片
     */
	public $feedback = "评价内容";

    /**
     * 评价时间，格式如 2012.11.21 16:23:23 
     */
	private $feedbackdate = "评价时间"
}

/**
 * 各种评价个数类
 */
class RateCountDO
{
	/**
	 * 宝贝数字id
	 */
	public $auctionId = 123456;

	/**
	 * 好评数
	 */
	public $goodCount = 123;

	/**
	 * 中评数
	 */
	public $normalCount = 123;

	/**
	 * 差评数
	 */
	public $badCount = 123;

	/**
	 * 总评论数
	 */
	public $total = 346;
}


/**
 * 商品管理类
 */
class ItemManager
{
    /**
     * 加载多个商品
     * @param  array $idList 商品id列表
     * @param  String $sortType 排序类型
     * @return array 商品列表
     */
    public function queryByIds($idList, $sortType)
    {
        return array(new ItemDO());
    }

    /**
     * 添加参数
     * @param  number $id 商品id
     * @return ItemDO 商品对象
     */
    public function queryById($id)
    {
        return new ItemDO();
    }

    /**
     * 根据店铺类目ID查询该类目下的商品
     * @param  array $catId 商品id列表
     * @param  String $sortType 排序类型
     * @param  int $count 返回最多的条目数
     * @return array 商品列表
     */
    public function queryByCategory($catId, $sortType, $count)
    {
        return array(new ItemDO());
    }

    /**
     * 根据关键字查找店铺内商品
     * @param  String $keyword 关键字
     * @param  String $sortType 排序类型
     * @param  int $count 返回最多的条目数
     * @return array 商品列表
     */
    public function queryByKeyword($keyword, $sortType, $count)
    {
        return array(new ItemDO());
    }

    /**
     *  根据ItemDO对象列表批量查询sku对象列表，有些宝贝没有sku信息，
     *  此时查询的结果返回为空列表
     *  @param $itemDOList (宝贝列表，进行批量查询,最多20条，超过20条返回空)
     *  @return array(array)(ItemSkuDO对象列表的列表)
     */
     public function queryOpenSkuDOListByOpenItemDOList($itemDOList)
     {
        return Array(Array(new ItemSkuDO));
     }
}

/**
 *shop manager
 */
class ShopManager
{
    /**
     * 查找店铺的页面列表
     * @return array 页面列表，对象为LinkDO
     */
    public function getShopPageLinks()
    {
        return array();
    }
}

/**
 * 店铺类目管理类
 */
class ShopCategoryManager
{
    /**
     * 根据ID查找类目对象
     * @param  int $id 类目ID
     * @return ShopCategoryDO 类目对象
     */
    public function queryById($id)
    {
        return new ShopCategoryDO();
    }

    /**
     * 根据类目ID查找其子类目
     * @param  int $catId 类目ID
     * @return array 类目列表
     */
    public function querySubCategories($catId)
    {

    }

    /**
     * 查找所有类目，包括子类目
     * @return array 类目列表
     */
    public function queryAll()
    {
        return array(new ShopCategoryDO());
    }
}

/**
 * 友情链接管理器
 */
class FriendLinkManager
{
    /**
     * 查询所有的链接
     * @return array 友情链接列表
     */
    public function queryAllLinks()
    {
    }
}

/**
 * uri 生成管理器
 */
class URIManager
{
    /**
     * 生成宝贝详情页的url地址
     *
     * @param  ItemDO $item  宝贝对象
     * @return String  详情页地址
     */
    public function detailURI($item)
    {
        return "item.html?id=" . $item->id;
    }

    /**
     * 当前店铺的搜索页面URL
     *
     * @return String 搜索页面url
     */
    public function searchURI()
    {
        return "list.htm";
    }

    /**
     * 生成评价页面url地址
     * @return String 评价页的url地址
     */
    public function rateURI()
    {
    }

    /**
     * 店铺介绍页面的uri地址
     * @return String 店铺介绍URL地址
     */
    public function shopIntrURI()
    {
    }

    /**
     * 店铺介绍页面的uri地址
     * @param  $category ShopCategoryDO  shop category
     * @return String 店铺介绍URL地址
     */
    public function shopCategoryURI($category)
    {

    }

    /**
     * 生成主旺旺的HTML code.
     *
     * @param $userNick 旺旺帐号
     * @return String 旺旺点灯的HTML代码
     */
    public function contactTag($userNick)
    {
        return "";
    }

    /**
     * 生成收藏链接
     * @return string 收藏链接URL
     */
    public function favoriteLink() {
        return "";
    }

    /**
     * 生成客服旺旺的HTML code.
     * @param $userNick String 旺旺帐号
     * @param $alternativeMessage String 图片替换信息，如果旺旺点灯的图片不能正常显示时，提示的文字信息
     * @param $style int 旺旺点灯图片的风格，默认值为1（大图标），2为小图标
     * @param $isDistributed boolean 是否支持 E客服分流，默认值为false(不支持），true为支持客服分流
     * @return String  旺旺点灯的HTML代码
     */
    public function supportTag($userNick, $alternativeMessage = "", $style = 1, $isDistributed = false)
    {
        return "";
    }
}

/**
 * 评价管理器
 */
Class RateManager
{
    /**
     * 业务规则：
     * 1、返回最多20个宝贝的单条评价信息;如果超过20个，直接忽略请求；
     * 2、评价筛选条件：获取每个商品最近的10条评价，
     *      取出字数大于20个字小于80个字的评价，随机选择一条返回；
     *      如果没有符合条件的评价，取字数最多的一条；
     * 3、1次页面渲染最多3次调用；否则忽略接口请求；
     * @param auctionNumIds    宝贝数字id列表
     * @return  非空评价列表
     */
	public function queryRates($auctionNumIds){
		return array(new RateDO());
	}

    /**
     * 业务规则：
     * 1、返回单个宝贝15条有内容的评价信息
     * 2、1次页面渲染最多30次调用；否则忽略接口请求；
     * 3、拉取评分较高的评价信息;
     * 4、不保证评论字数在某一个字数范围内
     * @param auctionNumId    宝贝数字id
     * @return    非空评价列表，按时间倒序排序
     */
	public function queryAuctionRates($auctionNumId){
		return array(new RateDO());
	}

    /** 业务规则：
     * 1、返回auctionNumId指定的宝贝，所拥有的主站好评数、中评数、差评数以及总评数
     * 2、1次页面渲染最多30次调用；否则忽略接口请求；
     * @param auctionNumId 宝贝数字id
     * @return RateCountDO
     */
	public function queryRateCount($auctionNumId){
		return new RateCountDO();
	}

    /** 业务规则：
     * 1、返回20条店铺收到的买家评价信息
     * 2、有评论内容，评分高的评价信息
     * 3、1次页面渲染最多1次调用；否则忽略接口请求；
     * 4、不保证评论字数在某一个字数范围内；
     * @return 非空评价列表，按评价时间倒序排序
     */
	public queryShopRates(){
		return array(new RateDO());
	}

}



//---------------- 全局对象 ------------------------

/**
 * 模块参数对象，一个Map结构对象
 */
$_MODULE = array("param" => 'value');

/**
 * 店铺管理全局对象
 */
$shopManager = new ShopManager();
/**
 * 商品管理全局对象
 */
$itemManager = new ItemManager();

/**
 * 店铺类目管理全局对象
 */
$shopCategoryManager = new ShopCategoryManager();
/**
 * 友情链接管理器
 */
$friendLinkManager = new FriendLinkManager();
/**
 * URI管理器全局对象
 */
$uriManager = new URIManager();
/**
 * 用户对象
 */
$_user = new UserDO();

/**
 * 店铺对象
 */
$_shop = new ShopDO();


/**
 * 评价对象
 */
$rateManager = new RateManager();

?>
