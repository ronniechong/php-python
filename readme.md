#Pi Generator with Python

This is my first attempt to use Heroku to host a Python script app. 

I created this UI to interact with the Python script instead of doing it via command line. The app basically generates a Pi with the number of decimals you've entered in the field. That's it.

Demo: https://phppython.herokuapp.com/

##pi.py
The script is from my Python repo: https://github.com/ronniechong/py-pi

##Build and deploy steps

- Create an empty {} ```package.json``` file for Composer dependencies
- Create a ```requirements.txt``` for Python dependencies. SymPy 0.7.6 is required.
- ```heroku create app-name-here```
- Set the default buildpack to php (I think this is not necessary)
- Add an additional buildpack ```heroku buildpacks:add --index 1 https://github.com/heroku/heroku-buildpack-python```
- ```git push heroku master```
