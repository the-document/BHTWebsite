API: http://website-bht.herokuapp.com/
1. Create new post: 
 + posts/CreateNewPost
 + method: POST
 + need object req {
                    'title',
                    'censor',
                    'description',
                    'creator',
                    'content',
                    'category',
                    }
                    
2. get post page:
+ /posts
+ method: GET

3. delete post
+ /post/delete/id
+ method: POST.
+ action: <br>
________ if delete succes redirect to posts page with session "message" => "success"<br>
________ if failure redirect to this post and list error <br>
__ goto test page to test this api.

4. get user info
+ /UserInfo
+ method: GET
