<?php
namespace App\Interfaces;

use http\Env\Request;

interface ControllerInterface
{
    /**
     * @param Request $request
     * @return void
     */
    public function store(Request $request);

    /**
     * @param Request $request
     * @return void
     */
    public function delete(Request $request);

    /**
     * @param Request $request
     * @return void
     */
    public function update(Request $request);

    /**
     * @param Request $request
     * @return void
     */
    public function get(Request $request);
}