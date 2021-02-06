# XMLHttpRequest example

from SO:
web.php:

Route::post('{user}/togglecategory', 'Site\ProfileController@toggleCategory')->name('toggleCategory');

Javascript code:

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200){
alert('send');

         }
          };


        xhttp.open("POST", '{{route('profile.toggleCategory', $user)}}', true);

        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content );

        xhttp.send("categories="+categories);


        });

Laravel Controller:

public function toggleCategory(Request $request, User $user)
{
$categories = explode(',', $request->categories);

        $user->categories()->sync($categories);
    }

maybe this helps to me.
https://attacomsian.com/blog/xhr-json-post-request
