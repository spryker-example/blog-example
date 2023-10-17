<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerExample\Zed\Blog\Persistence;

use Generated\Shared\Transfer\BlogCommentTransfer;
use Generated\Shared\Transfer\BlogCriteriaFilterTransfer;
use Generated\Shared\Transfer\BlogTransfer;
use Generated\Shared\Transfer\FilterTransfer;

interface BlogRepositoryInterface
{
    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\BlogCriteriaFilterTransfer $blogCriteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\SpyBlogEntityTransfer[]
     */
    public function filterBlogPosts(BlogCriteriaFilterTransfer $blogCriteriaFilterTransfer);

    /**
     * @api
     *
     * @param string $blogName
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filterTransfer
     *
     * @return \Generated\Shared\Transfer\SpyBlogEntityTransfer[]
     */
    public function findBlogCollectionByFirstName($blogName, FilterTransfer $filterTransfer = null);

    /**
     * @api
     *
     * @param string $blogName
     *
     * @return \Generated\Shared\Transfer\SpyBlogEntityTransfer
     */
    public function findBlogByName($blogName);

    /**
     * @api
     *
     * @param string $blogName
     *
     * @return int
     */
    public function countBlogByName($blogName);

    /**
     * @api
     *
     * @param string $blogName
     *
     * @return int
     */
    public function findBlogByNameWithCommentCount($blogName);
}
