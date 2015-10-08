<?php 

class PostController extends BaseController 
{
    private function isAuthorized()
    {
        if (Auth::guest()) {
            throw new UnauthorizedAccessException;
            Log::info('Unauthorized User');
        }
    }

    public function store($data)
    {
        $this->isAuthorized();
        $this->repository->save($data);
    }

    public function delete($id)
    {
        $this->isAuthorized();
        $this->respository->delete($id);
    }
}