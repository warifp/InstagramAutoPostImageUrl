<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * TagSection.
 *
 * @method ExploreItemInfo getExploreItemInfo()
 * @method string getFeedType()
 * @method TagLayoutContent getLayoutContent()
 * @method string getLayoutType()
 * @method bool isExploreItemInfo()
 * @method bool isFeedType()
 * @method bool isLayoutContent()
 * @method bool isLayoutType()
 * @method $this setExploreItemInfo(ExploreItemInfo $value)
 * @method $this setFeedType(string $value)
 * @method $this setLayoutContent(TagLayoutContent $value)
 * @method $this setLayoutType(string $value)
 * @method $this unsetExploreItemInfo()
 * @method $this unsetFeedType()
 * @method $this unsetLayoutContent()
 * @method $this unsetLayoutType()
 */
class TagSection extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'layout_type'       => 'string',
        'layout_content'    => 'TagLayoutContent',
        'feed_type'         => 'string',
        'explore_item_info' => 'ExploreItemInfo',
    ];
}
