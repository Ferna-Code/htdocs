# htdocs

Hay que crear la tabla Perfiles con la siguiente estructura:

```sql
CREATE TABLE IF NOT EXISTS $tableName(
    rut varchar(10) primary key not null,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    nivel int not null,
    curriculum varchar(100) null
);
```


Deje condigurada la coneccion a la base de datos, para cambiar el usuario, password, host o database hay que realizarlo en config.php.

Al archivo .htaccess no hay que modificarle nada ya que es el archivo que permite que todo se vea desde el index principal.
