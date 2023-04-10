using System;

namespace Anti_Injection
{
   public class Anti_SQL_Injection
    {
        public String Filter_Text(String Value_Text)
        {
            try
            {
                Value_Text = Value_Text.Replace("\"", "");

            }
            catch { }

            try
            {
                Value_Text = Value_Text.Replace("`", "");
            }
            catch{}

            try
            {
                Value_Text = Value_Text.Replace("'", "");
            }
            catch
            {}

            return Value_Text;
        }
    }
}
