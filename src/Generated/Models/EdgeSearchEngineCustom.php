<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
*/
class EdgeSearchEngineCustom extends EdgeSearchEngineBase implements Parsable 
{
    /**
     * Instantiates a new edgeSearchEngineCustom and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.edgeSearchEngineCustom');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeSearchEngineCustom
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeSearchEngineCustom {
        return new EdgeSearchEngineCustom();
    }

    /**
     * Gets the edgeSearchEngineOpenSearchXmlUrl property value. Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
     * @return string|null
    */
    public function getEdgeSearchEngineOpenSearchXmlUrl(): ?string {
        $val = $this->getBackingStore()->get('edgeSearchEngineOpenSearchXmlUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edgeSearchEngineOpenSearchXmlUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeSearchEngineOpenSearchXmlUrl' => fn(ParseNode $n) => $o->setEdgeSearchEngineOpenSearchXmlUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('edgeSearchEngineOpenSearchXmlUrl', $this->getEdgeSearchEngineOpenSearchXmlUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the edgeSearchEngineOpenSearchXmlUrl property value. Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
     * @param string|null $value Value to set for the edgeSearchEngineOpenSearchXmlUrl property.
    */
    public function setEdgeSearchEngineOpenSearchXmlUrl(?string $value): void {
        $this->getBackingStore()->set('edgeSearchEngineOpenSearchXmlUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
