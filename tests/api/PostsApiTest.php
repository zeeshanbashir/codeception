<?php

namespace Tajawal\Test;
use ApiTest;
use Codeception\Scenario;
use Codeception\Util\HttpCode;

/**
 * Class PostsApiTest
 *
 * @package Tajawal\Test
 */
class PostsApiTest extends \Codeception\TestCase\Test
{

    /**
     * get all posts
     *
     * @return void
     *
     */
    public function testGetPosts(){
        $scenario = new Scenario($this);
        $I = new ApiTest($scenario);

        $I->sendGET('/posts');
        $I->canSeeResponseCodeIs(HttpCode::OK);
        $I->canSeeResponseContainsJson(['id' => '1']);
    }

    /**
     * get post by id
     * @return void
     */
    public function testGetPostById(){
        $scenario = new Scenario($this);
        $I = new ApiTest($scenario);

        $I->sendGET('/posts',['id' => '3']);
        $I->canSeeResponseCodeIs(HttpCode::OK);
        $I->canSeeResponseContainsJson(['id' => '3']);
    }
}