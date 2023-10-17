<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerExample\Zed\Blog\Business;

use SprykerExample\Zed\Blog\Business\Model\Blog;
use SprykerExample\Zed\Blog\Persistence\BlogRepository;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \SprykerExample\Zed\Blog\Persistence\BlogRepositoryInterface getRepository()
 * @method \SprykerExample\Zed\Blog\Persistence\BlogEntityManagerInterface getEntityManager()
 */
class BlogBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \SprykerExample\Zed\Blog\Business\Model\Blog
     */
    public function createBlog()
    {
        return new Blog($this->getRepository(), $this->getEntityManager());
    }
}
