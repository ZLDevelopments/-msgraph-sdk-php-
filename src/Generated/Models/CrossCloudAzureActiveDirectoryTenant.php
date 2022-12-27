<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossCloudAzureActiveDirectoryTenant extends IdentitySource implements Parsable 
{
    /**
     * Instantiates a new CrossCloudAzureActiveDirectoryTenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossCloudAzureActiveDirectoryTenant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossCloudAzureActiveDirectoryTenant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossCloudAzureActiveDirectoryTenant {
        return new CrossCloudAzureActiveDirectoryTenant();
    }

    /**
     * Gets the cloudInstance property value. The cloudInstance property
     * @return string|null
    */
    public function getCloudInstance(): ?string {
        return $this->getBackingStore()->get('cloudInstance');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudInstance' => fn(ParseNode $n) => $o->setCloudInstance($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudInstance', $this->getCloudInstance());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the cloudInstance property value. The cloudInstance property
     *  @param string|null $value Value to set for the cloudInstance property.
    */
    public function setCloudInstance(?string $value): void {
        $this->getBackingStore()->set('cloudInstance', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
