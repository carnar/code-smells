<?php 

class PostController extends BaseController 
{
    public function store($data)
    {
        if (Auth::guest()) {
            throw new UnauthorizedAccessException;

            Log::info('Unauthorized User');
        }
        
        $this->repository->save($data);
    }

    public function delete($id)
    {
        if (Auth::guest()) {
            throw new UnauthorizedAccessException;
            
            Log::info('Unauthorized User');
        }

        $this->respository->delete($id);
    }
}