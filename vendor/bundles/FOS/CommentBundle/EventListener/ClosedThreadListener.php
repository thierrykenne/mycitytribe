<?php

/**
 * This file is part of the FOSCommentBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\EventListener;

use FOS\CommentBundle\Events;
use FOS\CommentBundle\Event\CommentEvent;
use FOS\CommentBundle\Model\CommentInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Blames a comment using Symfony2 security component
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
class ClosedThreadListener implements EventSubscriberInterface
{
    /**
     * Disallows comments in a closed thread.
     *
     * @param \FOS\CommentBundle\Event\CommentEvent $event
     */
    public function onCommentPersist(CommentEvent $event)
    {
        $comment = $event->getComment();
        $thread = $comment->getThread();

        if (!$thread->isCommentable()) {
            throw new \LogicException('Cannot add comment to a closed thread');
        }
    }

    static public function getSubscribedEvents()
    {
        return array(Events::COMMENT_PRE_PERSIST => 'onCommentPersist');
    }
}
