<?php
namespace Funny\Router;

/**
 * Interface HandlerInterface
 * @package Funny\Router
 */
interface HandlerInterface
{
    /**
     * HandlerInterface constructor.
     * @param callable|array $handle
     * @param array $events
     * @param array $matchVars
     */
    public function __construct($handle, $events, $matchVars);

    /**
     * 执行命中目标回调函数(方法)
     * @param array $params
     * @return $this
     */
    public function dispatch($params = []);

    /**
     * 获取回调(方法)执行返回值
     * @return mixed
     */
    public function getReturnValue();
}