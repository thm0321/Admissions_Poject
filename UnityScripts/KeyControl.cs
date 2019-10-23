using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class KeyControl : MonoBehaviour
{
    private Rigidbody rb;

    //public float speed = .15F;

    void Start()
    {
        //rb = GetComponent<Rigidbody>();
    }

    // Update is called once per frame
    void FixedUpdate()
    {
        float rotHoriz = Input.GetAxis("Horizontal");
        float rotVert  = -Input.GetAxis("Vertical");
        transform.Rotate(rotVert, 0f, 0f, Space.Self);
        transform.Rotate(0f, rotHoriz, 0f, Space.World);
    }
}
