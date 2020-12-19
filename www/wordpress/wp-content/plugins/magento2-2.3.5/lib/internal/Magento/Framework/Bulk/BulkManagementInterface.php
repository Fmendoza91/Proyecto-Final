<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Bulk;

/**
 * Interface BulkManagementInterface
 * @api
 * @since 102.0.5
 */
interface BulkManagementInterface
{
    /**
     * Schedule new bulk
     *
     * @param string $bulkUuid
     * @param OperationInterface[] $operations
     * @param string $description
     * @param int $userId
     * @return boolean
     * @since 102.0.5
     */
    public function scheduleBulk($bulkUuid, array $operations, $description, $userId = null);

    /**
     * Delete bulk
     *
     * @param string $bulkId
     * @return boolean
     * @since 102.0.5
     */
    public function deleteBulk($bulkId);
}
