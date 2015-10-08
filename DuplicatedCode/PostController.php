<?php 

class PostController extends BaseController 
{
    public function store($data)
    {
        if (Auth::guest()) {
            throw new Exception('Unauthorize exception');

            Log::info('Forbbiden: Unauthorized user');
        }
        
        $this->repository->save($data);
    }

    public function delete($id)
    {
        if (Auth::guest()) {
            throw new Exception('Unauthorize exception');
            
            Log::info('Forbbiden: Unauthorized user');
        }

        $this->respository->delete($id);
    }
}