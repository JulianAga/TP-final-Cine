<?php namespace repositories;

    use repositories\IRepository as IRepository;
    use model\Post as Post;

    class PostsRepository implements IRepository
    {
        private $postsList = array();

        public function getAll(){
            $this->retrieveData();
            return $this->postsList;
        }

        public function add($value){
            $this->retrieveData();
            array_push($this->postsList, $value);
            $this->saveData();
        }

        public function delete($value){
            $this->retrieveData();
            $newList = array();
            foreach ($this->postsList as $post) {
                if($post->getId() != $value){
                    array_push($newList, $post);
                }
            }
    
            $this->postsList = $newList;
            $this->saveData();
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->postsList as $post)
            {
                $valuesArray["ID"] = $post->getID();
                $valuesArray["title"] = $post->getTitle();
                $valuesArray["author"] = $post->getAuthor();
                $valuesArray["category"] = $post->getCategory();
                $valuesArray["date"] = $post->getDate();
                $valuesArray["description"] = $post->getDescription();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents('data/posts.json', $jsonContent);
        }

        private function RetrieveData()
        {
            $this->postsList = array();

            if(file_exists('data/posts.json'))
            {
                $jsonContent = file_get_contents('data/posts.json');

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                    $post = new Post();
                    $post->setID($valuesArray["ID"]);
                    $post->setTitle($valuesArray["title"]);
                    $post->setAuthor($valuesArray["author"]);
                    $post->setCategory($valuesArray["category"]);
                    $post->setDate($valuesArray["date"]);
                    $post->setDescription($valuesArray["description"]);

                    array_push($this->postsList, $post);
                }
            }
        }

        public function getByID($ID) {
            $this->RetrieveData();
            $flag = false;

            foreach ($this->postsList as $key => $category) {
                if($category->getID() == $ID) {
                 $flag = true;
                }
            }
            return $flag;
        }
    
    }
?>