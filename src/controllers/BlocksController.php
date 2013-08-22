<?php namespace Davzie\LaravelBootstrap\Controllers;
use Davzie\LaravelBootstrap\Blocks\BlocksInterface;

class BlocksController extends ObjectBaseController {

    /**
     * Make the controller enabled image uploads
     * @var boolean
     */
    protected $uploadable = true;

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'blocks';

    /**
     * Construct Shit
     */
    public function __construct( BlocksInterface $blocks )
    {
        $this->model = $blocks;
        parent::__construct();
    }

}