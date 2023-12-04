using System.ComponentModel.DataAnnotations;

namespace CinemaAPI.Model {
    public class UserInfo {
        [Key]
        public Guid? UserId { get; set; }
        public string? FullName { get; set; }
        public string? PhoneNumber { get; set; }
        public string? Email { get; set; }
        public string? Password { get; set; }
    }

    public class UserLogin {
        public string? Email { get; set; }
        public string? Password { get; set; }
    }

    public class UserRegister {
        public string? FullName { get; set; }
        public string? PhoneNumber { get; set; }
        public string? Email { get; set; }
        public string? Password { get; set; }
    }
}