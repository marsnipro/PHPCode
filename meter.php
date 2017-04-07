import java.util.HashMap;
import java.util.Map;
/**
The ThreadContext allows applications to store information either
**/

public class ThreadContext {
 private static final ThreadLocal userThreadLocal = new ThreadLocal();
/**
Puts a context value (the value parameter) as identified with the key parameter into the current thread's context map.
**/
 public static void put(String key,Object value) {
  if(userThreadLocal.get()==null)
   userThreadLocal.set(new HashMap());
  userThreadLocal.get().put(key, value);
 } 
 /**
 Clears the context map
 **/
 public static void unset() {
  userThreadLocal.remove();
 }
 /**
 Gets the context value identified by the key parameter.
 **/
 public static Object get(String key) {
  return userThreadLocal.get().get(key);
 }
        
    
}
