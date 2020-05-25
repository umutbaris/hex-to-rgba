# hex-to-rgba

Basic CLI app for converting hex values to RGBA and Unit Tests

| HEX	          | Alpha         | Output
| ------------- | ------------- |------------------------
| #FFF          | 0.3 (string)	|rgba(255, 255, 255, .3)
| #FFFFFF	      | 1 (integer)   |rgba(255, 255, 255, 1)
| FFF   	      | .5 (string)   |rgba(255, 255, 255, .5)
| FFFFFF 	      | 1 (integer)   |rgba(255, 255, 255, 1)
| FFFFF 	      |1 (integer)    |throws Error)

* Clone the repository 
  ```  git clone https://github.com/umutbaris/hex-to-rgba.git  ```

* Run on CLI examples
  ``` $ php classes/IncludeMethodClass.php FFF 0.3``` 
  ``` $ php classes/IncludeMethodClass.php '#FFFFFF' 1 ```