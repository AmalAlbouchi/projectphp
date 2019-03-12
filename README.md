# projectphp
> php school project


# if you are reading this i want you to know i love you <3


---------
## about the BD
### 3 tables:

#### product:
- id | int auto_incr | `primary`
- name | txt  
- price | float
- description | txt
- brief-descr | txt
- review | float (/5) 
- category | int (0,1,2)
- image | file
- image-name | txt

#### review:
- text | txt
- user | txt 
- date | date
- id | int | `foreign`

#### user:
- pseudo | txt `primary`
- password | txt
- type | bool (0 admin/ 1 client)
- gender | bool (0 female/ 1 male) 
- name | txt
- familyname | txt 
- address | txt
- date_sign | date
- phone | txt
