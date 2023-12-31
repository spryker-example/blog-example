<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerExample\Zed\Blog\Dependency\Plugin;

use Generated\Shared\Transfer\BlogTransfer;

interface PreSaveBlogPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\BlogTransfer $blogTransfer
     *
     * @return \Generated\Shared\Transfer\BlogTransfer
     */
    public function preSave(BlogTransfer $blogTransfer);
}
