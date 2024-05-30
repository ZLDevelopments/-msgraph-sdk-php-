<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\ValueAxis\Format\Font;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FontRequestBuilderPatchRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new FontRequestBuilderPatchRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
