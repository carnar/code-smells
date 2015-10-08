<?php 

class PostController extends BaseController 
{
    private function authorize()
    {
        if (Auth::guest()) {
            throw new UnauthorizedAccessException;
            Log::info('Unauthorized User');
        }
    }

    public function store($data)
    {
        $this->authorize();
        $this->repository->save($data);
    }

    public function delete($id)
    {
        $this->authorize();
        $this->respository->delete($id);
    }
}